<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): Response
    {

        if(auth()->user()->role != $role){

            return response()->view('access-denied');

        }

        return $next($request);

    }
}