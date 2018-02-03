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

	// Signup
	public function signup()
	{
		return view('vendor.signup');
	}

	// Signup Confirmation
	public function signupConfirmation()
	{
		return view('vendor.signupConfirmation');
	}

	// Email Signup Confirmation
	public function emailSignupConfirmation()
	{
		return view('vendor.email.signupConfirmation');
	}

}