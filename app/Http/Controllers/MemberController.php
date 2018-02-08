<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
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

	// Member View Pass
	public function pass()
	{
		return view('member.pass');
	}

}