<?php

namespace App\Http\Controllers;

// use App\Destination;
use App\Billing\PaymentFailedException;
use App\Billing\PaymentGateway;
use App\Mail\NewPurchase;
use App\Pass;
use App\PromoCode;
use App\Purchase;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Cache;

class CheckoutController extends Controller
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

	// Payment
    public function payment(Request $request)
    {

        $pass = Pass::findOrFail($request->pass_id);
        $promoCodes = PromoCode::where('active',1)->get();

        if ($request->hasCookie('go_promo')) {
            $promoCookie = $request->cookie('go_promo');
        } else $promoCookie = null;        

        if($request->session()->has('passes'))
        {
            $request->session()->push('passes',$request->pass_id);
        } else {
            $passes = [$request->pass_id];
            $request->session()->push('passes',$passes);
        }
        return view('checkout.payment',[
            'pass' => $pass,
            'promoCodes' => $promoCodes,
            'promoCookie' => $promoCookie,
        ]);

    }

    // Process the Payment
    public function paymentStore(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'name'      =>  'required',
            'email'         =>  'required|email',
            'number' => 'required',
            'expiry' => 'required',
            'cvc' => 'required',
            'name' => 'required',
            'zipcode' => 'required',
        ]);
        // Create or find A User
        $redirectTo = 'checkout.register';
        $user = User::firstOrCreate(['email' => $request->email]);
        $user->phone = $request->phone;
        if(!$user->firstname)
        {
            $parts = explode(" ", $request->name);
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);    
            (empty($firstname)) ? ($firstname = $lastname) && ($lastname = '') : $firstname = $firstname;
            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->save();

        }

        $pass = Pass::findOrFail($request->pass_id);

        $exp_month = trim(substr($request->expiry, 0,strpos($request->expiry, '/')));
        $exp_year = trim(substr($request->expiry, strpos($request->expiry, '/')+1,strlen($request->expiry)));

        if(empty($request->token))
        {
            try{
                $token = $this->paymentGateway->getValidToken([
                    "number" => $request->number,
                    'name' => $request->name,
                    "exp_month" => $exp_month,
                    "exp_year" => $exp_year,
                    "cvc" => $request->cvc,
                    "address_zip" => $request->zipcode,
                ]);  
            } catch (PaymentFailedException $e)
            {
                return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
            }
              
        } else $token = $request->token;

        // return $request->all();


        try {
            // dd($request);
            if ($request->hasCookie('go_referer')) {
                $referer = $request->cookie('go_referer');
            } else $referer = null;
            if ($request->hasCookie('go_ga_campaign')) {
                $ga_campaign = $request->cookie('go_ga_campaign');
            } else $ga_campaign = null;
            if ($request->hasCookie('go_visit_count')) {
                $visit_count = $request->cookie('go_visit_count');
                // dd($request->cookie('visit_count'));
            } else $visit_count = null;            
            // $amount = $request->total;
            $amount = ($request->qty*$pass->price);
            if($request->donate4) $amount += 400;
            // dd($amount);
            if(!empty($request->promo))
            {
                $promo = PromoCode::where('code',$request->promo)->first();
                if(is_null($promo)) return redirect()->back()->with('error','Sorry, this promotional code is not valid.');
                $amount = $amount-$promo->discount;
                $promoItem = [
                    'description' => $promo->code,
                    'qty' => 1,
                    'price' => -abs($promo->discount),
                ];
            }
            $charge = $this->paymentGateway->charge($amount,$token);

            // @ToDo: Create Confirmation Number

            $card = $user->cards()->firstOrCreate([
                'brand' => $charge->source->brand,
                'last4' => $charge->source->last4,
                'exp_month' => $charge->source->exp_month,
                'exp_year' => $charge->source->exp_year,
                'code' => $request->cvc
            ]);
            // dd($card);
            $purchase = Purchase::create([
                'user_id' => $user->id,
                'credit_card_id' => $card->id,
                'purchase_date' => Carbon::now(),
                'stripe_charge_id' => $charge->id,
                'promo_id' => $request->promo,
                'referring_url' => $referer,
                'campaign_id' => $ga_campaign,
                'num_visits' => $visit_count,
            ]);
            $purchase->items()->create([
                'pass_id' => $pass->id,
                'description' => $pass->name,
                'qty' => $request->qty,
                'price' => $pass->price
            ]);

            if($request->donate4) {
                $purchase->items()->create([
                    // 'pass_id' => $pass->id,
                    'description' => '$4 Get Kids Outdoors Donation',
                    'qty' => $request->qty,
                    'price' => $pass->price
                ]);                
            }
            if(!empty($request->promo))
            {
                $purchase->items()->create($promoItem);
            }

            $purchaseNotice = new NewPurchase($purchase);
            $purchaseNotice->subject('GO Pass Purchase');
            // dd($purchaseNotice);
            \Mail::to($user)->send($purchaseNotice);
            if(\App::environment() == 'production')
            {
                \Slack::to('#pass-sold')->send('Pass sold to ' . $user->firstname . " (" . $user->email . ")");
            }
            

        } catch (PaymentFailedException $e){
            // return $e;
            // return response()->json(['Payment Failed'],422);
            
            return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
        }
        // dd($user);
        // return redirect('/purchases/' . $purchase->confirmationNumber)->with('status','Congratulations - now Get Outside!');
        // return redirect()->route('user.show',['confirmationNumber' => $purchase->confirmation_number]);
        // If the user is new and doesn't have a password, redirect them to create one.
        if(empty($user->password))
        {
            return redirect()->route('checkout.register',[$user])->with('status','Purchase Successful!')->with('user',$user); 
        }
        \Auth::login($user, true);
        return redirect()->route('member.show',[\Auth::user()])->with('status','Purchase Successful!');

                   
    }

    // Register
    public function register(Request $request)
    {
        
        $pass = [];

        if(!$request->session()->has('user'))
        {
            abort(404);
        } else {
            $user = session('user');
        }
        // return $user;
        return view('checkout.register',[
            'user' => $user
        ]);
    }

    // Store Password
    public function registerStore(Request $request)
    {
        // return $request->all();
        $request->validate([
            'password'     =>  'required',
            'confirmPassword' => 'required'
        ]);        
        // Confirm Passwords Match
        if($request->password !== $request->confirmPassword) return redirect()->back()->with('error','Your passwords do not match.');

        $user = User::findOrFail($request->user_id);
        $user->password = \Hash::make($request->password);
        $user->save();
        \Auth::login($user, true);
        return redirect()->route('member.show',[\Auth::user()])->with('status','Purchase Successful!');
    }

}