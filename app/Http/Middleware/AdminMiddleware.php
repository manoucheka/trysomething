<?php

namespace App\Http\Middleware;
use Sentinel;
use Closure;

class AdminMiddleware
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
        // condition 1: User should be authenticated
        // condition 2: authenticated user should be an admin
          if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug=='admin') 
              
            //Log::info('role', ['role' =>  Sentinel::getUser()->roles()->first()]);
        return $next($request);
         else
            return redirect('/');
    }
}
