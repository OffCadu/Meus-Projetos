<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HospedeACLMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()&&auth()->user()->hospede){
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
