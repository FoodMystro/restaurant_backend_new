<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if (auth()->user()->role == 'user' ||
            auth()->user()->role == 'super'||
            auth()->user()->role == 'admin'||
            auth()->user()->role == 'manager'||
            auth()->user()->role == 'supervisor'|| 
            auth()->user()->role == 'staff')
        {
            return $next($request);
        }
        abort(404);

    }
}
