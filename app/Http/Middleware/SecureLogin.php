<?php

namespace App\Http\Middleware;

use Closure;

class SecureLogin
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
        $user = \App\Models\User::where('email',$request->email)->first();
        if ($user['status'] == 'Admin') {
            return redirect()->route('home');
        } else if($user['status'] == 'User'){
            return redirect()->route('home_user');
        }
        
        return $next($request);
    }
}
