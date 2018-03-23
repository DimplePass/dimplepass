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
        $pass = Pass::findOrFail($request->pass_id);

        if($request->session()->has('passes'))
        {
            $request->session()->push('passes',$request->pass_id);
        } else {
            $passes = [$request->pass_id];
            $request->session()->push('passes',$passes);
        }
        return view('checkout.register',[
            'pass' => $pass,
        ]);
    }

    // Register
    public function registerUser(Request $request)
    {
        // return $request->all();
        $request->validate([
            'firstname'     =>  'required',
            'lastname'      =>  'required',
            'email'         =>  'unique:users,email|required|email',
        ]);        
        $user = User::make($request->except('password','confirmPassword','pass_id', 'donate4'));
        $user->password = \Hash::make($request->password);
        $user->save();
        \Auth::login($user, true);
        $pass = Pass::findOrFail($request->pass_id);
        $donate4 = $request->donate4;
        return redirect()->route('checkout.payment',[
            'pass_id' => $pass->id,
            'donate4' => $donate4
        ]);
    }
	// Payment
	public function checkoutPayment(Request $request)
	{
        $user = \Auth::user();
        $pass = Pass::findOrFail($request->pass_id);

        if($request->session()->has('passes'))
        {
            $request->session()->push('passes',$request->pass_id);
        } else {
            $passes = [$request->pass_id];
            $request->session()->push('passes',$passes);
        }
		// Countries Drop Down List
		$selectCountries = ['Canada', 'United States'];

        return view('checkout.payment',[
            'selectCountries' => $selectCountries,
            'pass' => $pass,
            'user' => $user
        ]);
	}

	// Payment Store
	public function checkoutPaymentStore(Request $request)
	{
		// return $request->all();
        $this->validate($request,[
            'number' => 'required',
            'expiry' => 'required',
            'cvc' => 'required',
            'name' => 'required',
            'zipcode' => 'required',
        ]);
        $user = \Auth::user();
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
            \Slack::to('#pass-sold')->send('Pass Sold!');

        } catch (PaymentFailedException $e){
            // return $e;
            // return response()->json(['Payment Failed'],422);
            
            return redirect()->back()->withInput()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
        }
        // return redirect('/purchases/' . $purchase->confirmationNumber)->with('status','Congratulations - now Get Outside!');
        // return redirect()->route('user.show',['confirmationNumber' => $purchase->confirmation_number]);
        return redirect()->route('member.show',[\Auth::user()])->with('status','Purchase Successful!');

	}

}