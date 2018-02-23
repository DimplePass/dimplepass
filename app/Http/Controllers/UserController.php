<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{

	// Member Overview
	public function index()
	{
		return view('member.index');
	}

	// Create a New Member
	public function store(Request $request)
	{
		return $request->all();
	}

	public function show(User $user)
	{
		return view('member.show',['user' => $user]);
	}

	// Member Edit
	public function edit(User $user)
	{
		return view('member.edit',['user' => $user]);
	}

	public function update(User $user, Request $request)
	{
		$user->fill($request->all());
		$user->save();
		return redirect()->route('member.show',[$user])->with('status','Your information has been updated successfully!');
	}

	// Member View Pass
	public function pass()
	{
		return view('member.pass');
	}

	// Member Print Pass
	public function printpass()
	{
		// return view('member.printpass');
    // Displays PDF view.
    $pdf = \PDF::loadView('member.pass');
		return $pdf->download('Pass.pdf');
	}

	// Member Terms
	public function terms()
	{
		return view('member.terms');
	}

	// Member Login
// 	public function login()
// 	{
// 		return view('auth.login');
// 	}

// 	// Member Password Email
// 	public function passwordemail()
// 	{
// 		return view('auth.passwords.email');
// 	}

// 	// Member Password Reset
// 	public function passwordreset()
// 	{
// 		return view('auth.passwords.reset');
// 	}

}