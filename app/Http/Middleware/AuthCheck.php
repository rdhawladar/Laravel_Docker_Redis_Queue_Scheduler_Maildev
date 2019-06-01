<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AuthCheck
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
        if(Session::has('foo')) {
            return $next($request);
        }
        return redirect('setfoo');
    }
}