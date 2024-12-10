<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $roles = explode('|', implode('|', $roles)); // menangani beberapa role
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request);
            } else {
                // Jika pengguna tidak memiliki akses, redirect ke halaman tertentu
                return redirect()->route('home');
            }
        }

        return redirect()->route('login');
    }
}
