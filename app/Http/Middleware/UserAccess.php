<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->user()->role == $userRole){
        if (auth()->user()->role == 'user' ||
            auth()->user()->role == 'supervisor'|| 
            auth()->user()->role == 'manager'||
            auth()->user()->role == 'admin'||
            auth()->user()->role == 'super')
        {
            return $next($request);
        }
        abort(404);
        
    }
}
