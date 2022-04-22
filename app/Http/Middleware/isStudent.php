<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role=='user'){
            if ((int)(auth()->user()->hours) >= 120) {
                return $next($request);
            } else {
                abort(401);
            }
        }else{
            abort(401);
        }
    }
}
