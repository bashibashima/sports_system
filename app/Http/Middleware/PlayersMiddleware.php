<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayersMiddleware
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->has('USER_LOGIN')){
           
        }
       else
       {
           $request->session()->flash('error','Access Denied');
           return redirect('users/playerlogin');
       }


        return $next($request);
    }
}
