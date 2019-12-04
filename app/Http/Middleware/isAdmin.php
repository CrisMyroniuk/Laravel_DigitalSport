<?php

namespace App\Http\Middleware;

use Closure;


class isAdmin
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
        $user = \Auth::user();
        if($user && $user->admin){

          return $next($request);

        }

        return \Redirect::back();
    }
}
