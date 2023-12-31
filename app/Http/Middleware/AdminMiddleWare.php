<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //check if user is an admin, only an admin request passes
        if ($request->user() && $request->user()->isAdmin == 1) {

            return $next($request);
        } else {

            // if user is not admin or not auth
            return redirect('/dashboard');
        }




    }




}
