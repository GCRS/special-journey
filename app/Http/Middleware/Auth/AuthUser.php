<?php

namespace App\Http\Middleware\Auth;

use Closure;
use JWTAuth;
use App;

class AuthUser
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
        $user = JWTAuth::parseToken()->toUser();

        App::singleton('user', function () use ($user) {
            return $user;
        });
        return $next($request);
    }
}
