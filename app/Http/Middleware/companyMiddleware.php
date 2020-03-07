<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class companyMiddleware
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
        if(Session::has('companyId'))
        {
            return $next($request);
        }
        else
           return Redirect::to('/company/login');
    }
}
