<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminDemo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guard('admin')->check()){
            if(Auth::guard('admin')->user()->IsDemo()){
                return $next($request);
            }
        }
        if($request->ajax()){
            return response()->json("This Function is not available for demo version.");
        }else{
            return redirect()->back()->with('success',"This Function is not available for demo version.");
        }
    }
}
