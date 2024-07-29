<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() != null) {
//            if (auth()->user()->email_verified_at) {
                if (auth()->user()->role == 'admin') {
                    return redirect()->route('admin.main.index');
                }
                return $next($request);
//            }
//            return view('auth.verify');
        }
        return redirect()->route('login');
    }
}
