<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class CHeckoutController extends Controller
{

	// Checkout
	public function checkout()
	{
		return view('checkout.index');
	}

	// Payment
	public function checkoutPayment()
	{
		return view('checkout.payment');
	}

	// Review
	public function checkoutReview()
	{
		return view('checkout.review');
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