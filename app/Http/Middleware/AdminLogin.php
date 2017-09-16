<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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

        if($request->session()->has('u_key'))
        {
            if($request->session()->get('u_key')=='key')
            {
                if($request->session()->get('u_role')=='admin')
                {
                    return $next($request);
                }
            }
        }

        return redirect('login');

    }
}
