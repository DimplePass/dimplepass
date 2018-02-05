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

	// Demo - Glacier
	public function glacier() { return view('parks.glacier'); }
	// Demo - Grand Teton
	// Demo - Great Smoky Mountains
	public function comingsoon() { return view('parks.comingsoon'); }
	// Demo - Yellowstone
	public function yellowstone() { return view('parks.yellowstone'); }
	// Demo - Yosemite
	public function yosemite() { return view('parks.yosemite'); }




}