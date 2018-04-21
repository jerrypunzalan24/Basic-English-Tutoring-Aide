<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class adminonly
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
        if(!$request->session()->get('role'))
            return redirect('/dashboard');

        return $next($request);
    }
}
