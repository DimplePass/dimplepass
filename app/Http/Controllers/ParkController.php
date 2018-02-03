<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class ParkController extends Controller
{

	// All Parks
	public function parks()
	{
		return view('parks.index');
	}

	// Specific Park
	public function park()
	{
		return view('parks.park');
	}

}