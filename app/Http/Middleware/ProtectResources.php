<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProtectResources
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
        // dd(Auth::user());
        if(!\Auth::check() && \Auth::user() != request()->get('member'))
        {
          dd("you are not allowed to see this");
        }        
        return $next($request);
    }
}
