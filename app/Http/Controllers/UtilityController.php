<?php

namespace App\Http\Controllers;

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
		// return view('index');
		// return view('maintenance');
    return view('comingsoon');
	}

	// About
	public function about()
	{
		return view('about');
	}

	// Contact
	public function contact()
	{
		return view('contact');
	}

	// FAQs
	public function faqs()
	{
		return view('faqs');
	}

	// Foundation Pages
	public function foundation()
	{
		return view('foundation.index');
	}

	// How it Works
	public function how()
	{
		return view('how');
	}

}