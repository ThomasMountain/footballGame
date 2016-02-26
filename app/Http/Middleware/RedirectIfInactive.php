<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfInactive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user()
                     ->isActive()
        ) {
            Auth::logout();

            flash()->overlay('Your account has been deactivated. If you think this has been happened in error please contact the IT Helpdesk', 'Unable to Login');

            return redirect('auth/login');
        }

        return $next($request);
    }
}