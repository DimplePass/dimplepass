<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
use App\Pass;
use App\User;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Cache;

class CheckoutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        return $request->all();
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
		return $request->all();
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