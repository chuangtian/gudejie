<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
class role
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
       dd($request->user()->type);
        $username=$request->header('name');
        $password=$request->header('clientkey');
        if (Auth::attempt(array('email' => $username, 'password' => $password),false)){
            //dd($next($request));
            return $next($request);
        }else{
            //$res = array('code' => 402,'msg' => '验证失败');
            //return response()->json($res);
        }

        return $next($request);
       
    }
}
