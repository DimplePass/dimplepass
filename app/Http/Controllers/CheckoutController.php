<?php

namespace App\Http\Controllers;

// use App\Destination;
use App\Billing\PaymentFailedException;
use App\Billing\PaymentGateway;
use App\Mail\NewPurchase;
use App\Pass;
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
	// Payment
    public function payment(Request $request)
    {

        $pass = Pass::findOrFail($request->pass_id);

        if($request->session()->has('passes'))
        {
            $request->session()->push('passes',$request->pass_id);
        } else {
            $passes = [$request->pass_id];
            $request->session()->push('passes',$passes);
        }
        return view('checkout.payment',[
            'pass' => $pass,
        ]);

    }

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
        if(!$user->exists())
        {
            $parts = explode(" ", $input['name']);
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
            $amount = ($request->qty*$pass->price);
            if($request->donate4) $amount = $amount + 400;
            // dd($amount);
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

            $purchase = new NewPurchase($purchase);
            $purchase->subject('GO Pass Purchase');
    
            \Mail::to($user)->send($purchase);
            if(\App::environment() == 'production')
            {
                \Slack::to('#pass-sold')->send('Pass Sold!');
            }
            

        } catch (PaymentFailedException $e){
            // return $e;
            // return response()->json(['Payment Failed'],422);
            
            return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
        }
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

    // OldPayment
	// public function checkoutPayment(Request $request)
	// {
 //        $user = \Auth::user();
 //        $pass = Pass::findOrFail($request->pass_id);

 //        if($request->session()->has('passes'))
 //        {
 //            $request->session()->push('passes',$request->pass_id);
 //        } else {
 //            $passes = [$request->pass_id];
 //            $request->session()->push('passes',$passes);
 //        }
	// 	// Countries Drop Down List
	// 	$selectCountries = ['Canada', 'United States'];

 //        return view('checkout.payment',[
 //            'selectCountries' => $selectCountries,
 //            'pass' => $pass,
 //            'user' => $user
 //        ]);
	// }

	// Old Payment Store
	// public function checkoutPaymentStore(Request $request)
	// {
	// 	// return $request->all();
 //        $this->validate($request,[
 //            'number' => 'required',
 //            'expiry' => 'required',
 //            'cvc' => 'required',
 //            'name' => 'required',
 //            'zipcode' => 'required',
 //        ]);
 //        $user = \Auth::user();
 //        $pass = Pass::findOrFail($request->pass_id);

 //        $exp_month = trim(substr($request->expiry, 0,strpos($request->expiry, '/')));
 //        $exp_year = trim(substr($request->expiry, strpos($request->expiry, '/')+1,strlen($request->expiry)));

 //        if(empty($request->token))
 //        {
 //            try{
 //                $token = $this->paymentGateway->getValidToken([
 //                    "number" => $request->number,
 //                    'name' => $request->name,
 //                    "exp_month" => $exp_month,
 //                    "exp_year" => $exp_year,
 //                    "cvc" => $request->cvc,
 //                    "address_zip" => $request->zipcode,
 //                ]);  
 //            } catch (PaymentFailedException $e)
 //            {
 //                return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
 //            }
              
 //        } else $token = $request->token;

 //        // return $request->all();


 //        try {
 //            $amount = ($request->qty*$pass->price);
 //            if($request->donate4) $amount = $amount + 400;
 //            // dd($amount);
 //            $charge = $this->paymentGateway->charge($amount,$token);

 //            // @ToDo: Create Confirmation Number

 //            $card = $user->cards()->firstOrCreate([
 //                'brand' => $charge->source->brand,
 //                'last4' => $charge->source->last4,
 //                'exp_month' => $charge->source->exp_month,
 //                'exp_year' => $charge->source->exp_year,
 //                'code' => $request->cvc
 //            ]);
 //            // dd($card);
 //            $purchase = Purchase::create([
 //                'user_id' => $user->id,
 //                'credit_card_id' => $card->id,
 //                'purchase_date' => Carbon::now(),
 //                'stripe_charge_id' => $charge->id,

 //            ]);
 //            $purchase->items()->create([
 //                'pass_id' => $pass->id,
 //                'description' => $pass->name,
 //                'qty' => $request->qty,
 //                'price' => $pass->price
 //            ]);

 //            if($request->donate4) {
 //                $purchase->items()->create([
 //                    // 'pass_id' => $pass->id,
 //                    'description' => '$4 Get Kids Outdoors Donation',
 //                    'qty' => $request->qty,
 //                    'price' => $pass->price
 //                ]);                
 //            }

 //            $purchase = new NewPurchase($purchase);
 //            $purchase->subject('GO Pass Purchase');
    
 //            \Mail::to($user)->send($purchase);
 //            if(\App::environment() == 'production')
 //            {
 //                \Slack::to('#pass-sold')->send('Pass Sold!');
 //            }
            

 //        } catch (PaymentFailedException $e){
 //            // return $e;
 //            // return response()->json(['Payment Failed'],422);
            
 //            return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
 //        }
 //        // return redirect('/purchases/' . $purchase->confirmationNumber)->with('status','Congratulations - now Get Outside!');
 //        // return redirect()->route('user.show',['confirmationNumber' => $purchase->confirmation_number]);
 //        return redirect()->route('member.show',[\Auth::user()])->with('status','Purchase Successful!');

	// }

}