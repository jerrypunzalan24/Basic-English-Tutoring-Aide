<?php

namespace App\Http\Middleware;

use Closure;

class authuser
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
        if(!$request->session()->has('login')){
            return redirect('/');
        }
        return $next($request);
    }
}
