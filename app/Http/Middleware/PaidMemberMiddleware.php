<?php

namespace App\Http\Middleware;

use Closure;

class PaidMemberMiddleware
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
        $user_email = DB::table('course')-> where('user_email')-> first();
        return $next($request);
    }
}
