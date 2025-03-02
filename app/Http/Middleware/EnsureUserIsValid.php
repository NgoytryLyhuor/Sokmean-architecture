<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsValid
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and Auth::user() is not null
        if (Auth::check() && Auth::user()) {
            $user = Auth::user();
            $adminData = \App\Models\User::find($user->id);

            // If user data is not found, log out and redirect to login
            if ($adminData == null) {
                Auth::logout(); // Log out the invalid user
                return redirect()->route('login');
            }
        } else {
            // If the user is not authenticated or Auth::user() is null, redirect to login
            return redirect()->route('login');
        }

        return $next($request);
    }
}
