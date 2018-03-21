<?php

namespace App\Http\Controllers;

// use App\Destination;
use Carbon\Carbon;
use App\User;
use CountryState;
use Illuminate\Http\Request;
use PDF;
// use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{

	// Member Overview
	public function index()
	{
		return redirect()->route('member.show',[\Auth::user()]);
	}

	// Create a New Member
	public function store(Request $request)
	{
		return $request->all();
	}

	// Member Edit
	public function edit(User $user)
	{
    $states = \CountryState::getStates('US');
    $countries = \CountryState::getCountries();
		return view('member.edit',[
		  'user' => $user,
		  'states' => $states,
			'countries' => $countries
		  ]);
	}

	// Member Show
	public function show(User $user)
	{
		// return $user->purchases->pass;
		return view('member.show',['user' => $user]);
	}

	public function update(User $user, Request $request)
	{
		// return $request->all();
		$request->validate([
            'firstname'		=>  'required',
            'lastname'		=>  'required',
            'email'				=>  'unique:users,email,'.$user->id.'|required|email',
	    ]);
		
		$user->fill($request->except('password','confirmPassword'));
		if(!empty($request->password) && $request->password == $request->confirmPassword) $user->password = \Hash::make($request->password);
		$user->save();
		return redirect()->route('member.edit',[$user])->with('status','Your information has been updated successfully!');
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
		$data = [
			'foo' => 'bar'
		];
		$pdf = PDF::loadView('member.printpass', $data);
		return $pdf->stream('DimplePass.pdf');
	}

	// Member Terms
	public function terms()
	{
		return view('member.terms');
	}
}