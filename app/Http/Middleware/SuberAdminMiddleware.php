<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminKeroMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            // admin role == 2
            // use role == 0

            if (Auth::user()->role == '3') {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/login.login');
        }    }
}
