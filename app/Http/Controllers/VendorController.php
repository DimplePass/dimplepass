<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class VendorController extends Controller
{

	// Become a Vendor
	public function index()
	{
		return view('vendor.index');
	}

	// Promise
	public function promise()
	{
		return view('vendor.promise');
	}

	// Terms & Agreement
	public function terms()
	{
		return view('vendor.terms');
	}

	// Application
	public function application()
	{
		return view('vendor.application');
	}

	// Application
	public function applicationProcess()
	{
		return view('vendor.application');
	}

	// Email Signup Confirmation
	public function emailSignupConfirmation()
	{
		return view('vendor.email.signupConfirmation');
	}

}