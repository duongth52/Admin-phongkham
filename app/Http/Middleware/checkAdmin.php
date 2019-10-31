<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdmin
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
        $isAdmin = Auth::user()->status;
        if(Auth::check()) {
            switch ($isAdmin) {
                case 0:
                    return $next($request);
                case 1:
                    break;
            }
        }
        return redirect()->route('getLogin');

        // if(!Auth::check()||Auth::user()->status >1){
        // }

        // return $next($request);
    }
}
