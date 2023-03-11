<?php

namespace App\Http\Middleware;

// use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guards = null): Response
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        if ($guard == "clerk" && Auth::guard($guard)->check()) {
            return redirect('/clerk');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
