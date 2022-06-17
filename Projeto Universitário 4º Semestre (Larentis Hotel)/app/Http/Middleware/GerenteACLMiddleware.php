<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GerenteACLMiddleware
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
        // $msg ='';
        if(auth()->check()&&auth()->user()->gerente){
            return $next($request);
        } else {
            // $msg = 'acesso negado, verifique se possui permissão para acessar a página desejada.';
            return redirect()->route('login');
        }
    }
}
