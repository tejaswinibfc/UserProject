<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    // public function handle($request, Closure $next)
    // {
    //     if (!auth()->check()) {
    //         return redirect('/');
    //     }
    //     return $next($request);
    // }

       public function handle($request, Closure $next)
    {
       
        if (Auth::guard('web')->check()) {

            return $next($request);
        }

        return redirect('/');
    }
}
