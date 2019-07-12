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
        if (! $request->hasCookie('go_referer')) {
          // Add a cookie to the response that lasts 30 Days (in minutes)
          \Cookie::queue('go_referer',$request->server('HTTP_REFERER'), 43200);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('go_promo') && $request->query('promo')) {
          // Add a cookie to the response that lasts 30 Days (in minutes)
          \Cookie::queue('go_promo',$request->query('promo'), 43200);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('go_ga_campaign') && $request->query('utm_campaign')) {
          // Add a cookie to the response that lasts 30 Days (in minutes)
          \Cookie::queue('go_ga_campaign',$request->query('utm_campaign'), 43200);
        }
        // Check that there is not already a cookie set

        if (! $request->hasCookie('go_visit_count')) {
          // Add a cookie to the response that lasts 30 Days (in minutes)
          \Cookie::queue('go_visit_count',1, 43200);
          session(['visit_count' => 1]);
        } else {
            // dd($request);
            // $visits = \Crypt::decrypt($request->cookie('visit_count'));
            $visits = \Cookie::get('go_visit_count');
            // dd($visits);
            // If this session doesn't have a visit_count, it is a new session, so increment the visit_count
            // dd(session()->has('visit_count'));
            if(!session()->has('visit_count'))
            {
                // Increment the visit count and set the session
                \Cookie::queue('visit_count',$visits+1, 43200);
                session(['visit_count' => $visits+1]);
            }            
        }

        return $next($request);        
    }
}
