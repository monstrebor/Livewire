<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if(Auth::check()){

        if(Auth::user()->role === 'admin'){

            return redirect()->intended('/admin/home');

        }elseif (Auth::user()->role == 'associate') {

            return redirect()->intended('/associate/home');

        } elseif (Auth::user()->role == 'regular') {

            return redirect()->intended('/regular/home');

        } elseif (Auth::user()->role == 'cashier') {

            return redirect()->intended('/cashier/home');
            
        }

    }

        return $next($request);



    }
}
