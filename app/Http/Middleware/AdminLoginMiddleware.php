<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use URL;
use Session;
class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function Handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            Session::put('url.intended', URL::current());
            if($request->ajax())
            {
                return response()->json(['status'=>403]);
            }  
            return redirect()->route('admin.login')->with('error','Please Login First');
        }


        return $next($request);
    }
}
