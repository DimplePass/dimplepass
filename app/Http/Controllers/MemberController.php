<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class MemberController extends Controller
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

	// Member Edit
	public function edit()
	{
		return view('member.edit');
	}

	// Member Show
	public function show()
	{
		return view('member.edit');
	}

	// Member Update
	public function update()
	{
		return $request->all();
		// return view('member.edit');
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

}