<?php

namespace App\Http\Middleware;

use Closure;

class ProtectResources
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(!empty($request->member) && !(\Auth::user()->id === $request->member->id))
        {
          return redirect('/member/'.\Auth::user()->id);
        }        
        return $next($request);
    }
}
