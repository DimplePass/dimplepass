<?php

namespace App\Http\Controllers;

use App\Pass;
// use App\Destination;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;

class UtilityController extends Controller
{
  
	///// Robots.txt
	public function robots()
	{
    if (\App::environment() == 'production') {
      // If on the live server, serve a nice, welcoming robots.txt.
      \Robots::addUserAgent('*');
      \Robots::addDisallow('/checkout');
      \Robots::addDisallow('/modal');
      \Robots::addDisallow('/apple-touch');
      //::addSitemap('sitemap.xml');
    } else {
      // If you're on any other server, tell everyone to go away.
      \Robots::addUserAgent('*');
      \Robots::addDisallow('/');
    }
	    return response(\Robots::generate(), 200, ['Content-Type' => 'text/plain']);		
	}

	// Homepage
	public function home()
	{
    $passes = \App\Pass::all()->where('active',1)->sortBy('name');
		// return $passes;
    return view('index',[
        'passes' => $passes
    ]);
	}

	// About
	public function about()
	{
		return view('about');
	}

	// Contact
	public function contact()
	{
		$helpTypes = ['Login Issues', 'My Passes', 'Membership', 'Redemption', 'Payment', 'Refunds', 'Other'];
		return view('contact', [
			'helpTypes' => $helpTypes
		]);
	}

	// FAQs
	public function faqs()
	{
		$helpTypes = ['Login Issues', 'My Passes', 'Membership', 'Redemption', 'Payment', 'Refunds', 'Other'];
		return view('faqs', [
			'helpTypes' => $helpTypes
		]);
	}

	// Foundation Pages
	public function foundation()
	{
		return view('foundation.index');
	}

	// Guarantee
	public function guarantee()
	{
		return view('guarantee');
	}

	// How it Works
	public function how()
	{
		return view('how');
	}

	// Only the Best Attractions
	public function thebest()
	{
		return view('thebest');
	}

}