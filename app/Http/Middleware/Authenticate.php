<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        if ($request->is('admin/*') && !auth('admin')->check()) {
            return route('admin.login');
        }
        if ($request->is('user/*') && !auth('web')->check()) {
            return route('user.login');
        }
        if ($request->is('franchise/*') && !auth('franchise')->check()) {
            return route('franchise.login');
        }
        return null;
    }
}
