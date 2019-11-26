<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->user()->type==2){
            return $next($request);
        }
        if($request->user()->type==3){
            return $next($request);
        }
        return redirect('/phone/phone');
    }
}
