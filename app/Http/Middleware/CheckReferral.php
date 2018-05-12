<?php

namespace App\Http\Middleware;

use Closure;

class CheckReferral
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // Check that there is not already a cookie set
        if (! $request->hasCookie('referer')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('referer',$request->server('HTTP_REFERER'), 86400);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('promo') && $request->query('promo')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('promo',$request->query('promo'), 86400);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('ga_campaign') && $request->query('utm_campaign')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('ga_campaign',$request->query('utm_campaign'), 86400);
        }
        // Check that there is not already a cookie set

        if (! $request->hasCookie('visit_count')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('visit_count',1, 86400);
          session(['visit_count' => 1]);
        } else {
            // dd($request);
            // $visits = \Crypt::decrypt($request->cookie('visit_count'));
            $visits = \Cookie::get('visit_count');
            // dd($visits);
            // If this session doesn't have a visit_count, it is a new session, so increment the visit_count
            if(!session()->has('visit_count'))
            {
                // Increment the visit count and set the session
                \Cookie::queue('visit_count',$visits+1, 86400);
                session(['visit_count' => $visits+1]);
            }            
        }

        return $next($request);        
    }
}
