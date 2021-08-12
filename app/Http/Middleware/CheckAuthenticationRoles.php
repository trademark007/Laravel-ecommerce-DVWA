<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckAuthenticationRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->role === 'Admin') {
            return $next($request);
        }
        return redirect()->route('home.users');
    }
}
