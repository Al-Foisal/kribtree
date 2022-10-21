<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated {

    public function handle($request, Closure $next, $guard = null) {

        if (Auth::guard($guard)->check()) {

            if (auth()->user()->type === 'admin') {
                return redirect(RouteServiceProvider::HOME);
            } else {
                return redirect()->route('index');
            }

        } else {
            return $next($request);
        }

    }

}
