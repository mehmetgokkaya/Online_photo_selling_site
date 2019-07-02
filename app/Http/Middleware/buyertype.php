<?php

namespace App\Http\Middleware;

use Closure;

class buyertype
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
        if(!$request->session()->has('buyer1')){
            
            return redirect()->route('login.index');
        }
        return $next($request);
    }
}
