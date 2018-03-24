<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Pass;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class DestinationController extends Controller
{

	// Destinations Map/Index
	public function index()
	{
		
	}

	// Show Destination 
	public function show(Destination $destination)
	{
		return $destination;
	}
}