<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       if(!empty(Auth::user())):
           if(Auth::check() && Auth::user()->level==='admin'||Auth::user()->level==='write'):
              return $next($request);
           else:
              return redirect('login');
           endif;
       else:
          return redirect('login');
       endif;
    }
    
}
