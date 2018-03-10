<?php

namespace App\Http\Controllers;

// use App\Destination;
use Carbon\Carbon;
use App\Billing\PaymentGateway;
use App\Pass;
use App\Purchase;
use App\User;
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
		$this->validate($request,[
            'number' => 'required',
            'expiry' => 'required',
            'cvc' => 'required',
            'name' => 'required',
        ]);
        $token = $this->paymentGateway->getValidTestToken();
        // return $request->all();
        $user = \Auth::user();
        $pass = Pass::findOrFail($request->pass_id);

        $amount = $request->qty*$pass->price;
        $this->paymentGateway->charge($amount,$token);

        $purchase = Purchase::create([
            'user_id' => $user->id,
            'purchase_date' => Carbon::now(),
        ]);
        $purchase->items()->create([
            'pass_id' => $pass->id,
            'qty' => $request->qty,
            'price' => $pass->price
        ]);

        return response()->json($purchase,201);

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