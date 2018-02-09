<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
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
			return view('checkout.index');
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

		// Payment
		public function checkoutPayment()
		{

			// Countries Drop Down List
			$selectCountries = ['Canada', 'United States'];

      return view('checkout.payment',[
          'selectCountries' => $selectCountries,
        ]);
		}

		// Payment Store
		public function checkoutPaymentStore(Request $request)
		{
			return $request->all();
		}

		// Review
		public function checkoutPassholders()
		{
			return view('checkout.passholder');
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