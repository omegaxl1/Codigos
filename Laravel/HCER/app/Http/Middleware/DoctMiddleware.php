<?php

namespace App\Http\Middleware;

use Closure;

class DoctMiddleware
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

        if(! auth()->check())
            return redirect('login');
            
        if (auth()->user()->id_role !=2)
            return redirect('home');
        return $next($request);
    }
}
