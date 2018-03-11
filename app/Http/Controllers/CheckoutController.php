<?php

namespace App\Http\Controllers;

// use App\Destination;
use App\Billing\PaymentFailedException;
use App\Billing\PaymentGateway;
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
        $user = User::make($request->except('password','confirmPassword','pass_id'));
        $user->password = \Hash::make($request->password);
        $user->save();
        \Auth::login($user, true);
        $pass = Pass::findOrFail($request->pass_id);
        return view('checkout.payment',[
            'pass' => $pass,
            'user' => $user
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
        ]);
        $user = \Auth::user();
        $pass = Pass::findOrFail($request->pass_id);
        //@ToDo Create the Customer Card 

        if(empty($request->token))
        {
            $token = $this->paymentGateway->getValidToken([
                "number" => $request->number,
                'name' => $request->name,
                "exp_month" => trim(substr($request->expiry, 0,strpos($request->expiry, '/'))),
                "exp_year" => trim(substr($request->expiry, strpos($request->expiry, '/')+1,strlen($request->expiry))),
                "cvc" => $request->cvc
            ]);            
        } else $token = $request->token;

        // return $request->all();


        try {
            $amount = $request->qty*$pass->price;
            $this->paymentGateway->charge($amount,$token);

            // @ToDo: Create Confirmation Number

            $purchase = Purchase::create([
                'user_id' => $user->id,
                'purchase_date' => Carbon::now(),
            ]);
            $purchase->items()->create([
                'pass_id' => $pass->id,
                'qty' => $request->qty,
                'price' => $pass->price
            ]);
        } catch (\Exception $e){
            // return response()->json(['Payment Failed'],422);
            return redirect()->back()->with('error','Oops, this credit card payment failed. ' . $e->getMessage());
        }

        return redirect()->route('checkout.thanks');

	}

	// Confirmation
	public function checkoutThanks()
	{
		return view('checkout.thanks');
	}

	// Email Confirmation
	public function checkoutEmailConfirmation()
	{
		return view('checkout.email.confirmation');
	}

}