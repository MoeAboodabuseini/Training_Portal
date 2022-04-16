<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectTo
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next

     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == 'user') {
            return response()->view('users.dash');
        }elseif (auth()->user()->role == 'admin'){
            return response()->view('admins.dash');
        }elseif (auth()->user()->role == 'supervisor'){
            return response()->view('supervisors.dash');
        }elseif (auth()->user()->role == 'company'){
            return redirect()->route('companies.show',auth()->user()->id);
        }else{
            abort(404);
        }

    }
}
