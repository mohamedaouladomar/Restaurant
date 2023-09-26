<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->usertype == '1') {
            return $next($request); // Proceed to the next middleware/request handler
        }

        // If user is not an admin, redirect them or show an error
        return redirect('/')->with('error', 'You don\'t have admin access.');
    }
}
