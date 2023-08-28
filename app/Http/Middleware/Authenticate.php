<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            info(Request()->segment(1));
            if (Request()->segment(1) == 'admin') {
                return $request->expectsJson() ? null : route('admin.doLogin');
            }
            else {
                return $request->expectsJson() ? null : route('login');
            }
        }

    }
}
