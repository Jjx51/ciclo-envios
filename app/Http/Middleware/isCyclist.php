<?php

namespace App\Http\Middleware;

use Closure;

class isCyclist
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
        $user=auth()->user();

        if($user->rol!='cyclist'){
            abort(404);
        }
        return $next($request);
    }
}
