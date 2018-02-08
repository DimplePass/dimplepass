<?php

namespace App\Http\Controllers;

// use App\Destination;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class DestinationController extends Controller
{

	// Destinations Map/Index
	public function index()
	{
		return view('destinations.index');
	}

	// Specific Destination
	public function destination()
	{
		return view('destinations.destination');
	}

	// Demo - Glacier
	public function glacier() { return view('destinations.glacier'); }
	// Demo - Grand Canyon
	public function grandcanyon() { return view('destinations.grandcanyon'); }
	// Demo - Yellowstone
	public function yellowstone() { return view('destinations.yellowstone'); }
	// Demo - Yosemite
	public function yosemite() { return view('destinations.yosemite'); }
	// Demo - Zion
	public function zion() { return view('destinations.zion'); }

	// Demo - Coming Soon
	public function comingsoon() { return view('destinations.comingsoon'); }





}