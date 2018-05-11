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
        if (! $request->hasCookie('referrer')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('referrer',encrypt($request->server('HTTP_REFERER')), 86400);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('promo') && $request->query('promo')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('promo',encrypt($request->query('promo')), 86400);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('ga_campaign') && $request->query('utm_campaign')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('ga_campaign',encrypt($request->query('utm_campaign')), 86400);
        }
        // Check that there is not already a cookie set
        if (! $request->hasCookie('visit_count')) {
          // Add a cookie to the response that lasts 60 days (in minutes)
          \Cookie::queue('visit_count',encrypt(1), 86400);
          session(['visit_count' => 1]);
        } else {
            $visits = $request->cookie('visit_count');
            // If this session doesn't have a visit_count, it is a new session, so increment the visit_count
            if(!session()->has('visit_count'))
            {
                // Increment the visit count and set the session
                \Cookie::queue('visit_count',encrypt($visits+1), 86400);
                session(['visit_count' => $visits+1]);
            }            
        }

        return $next($request);        
    }
}
