<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     * Bounce the user back to the main dashboard if they are not an admin
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$request->user()
                     ->isAdmin()
        ) {
            return redirect('/');
        }

        return $next($request);
    }
}
