<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdminWebmaster
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
        if(Auth::user()->role_id <= 2){
            return $next($request);
        }else{
            return redirect()->back()->with("message",'Cette page est pas pour toi');
        }
        
    }
}
