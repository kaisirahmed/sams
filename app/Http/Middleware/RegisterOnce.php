<?php

namespace App\Http\Middleware;

use Closure;
use App\user;

class RegisterOnce
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
        if(!User::exists()) {
            return redirect('register');
        }
        return $next($request);
    }
}
