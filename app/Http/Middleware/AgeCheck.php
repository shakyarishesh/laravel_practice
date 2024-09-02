<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Hello from AgeCheck";
        //print_r($request->age);
        if ($request->age<18)
        {
            die('Your age is less the 18. You cannot visit this site');
        }
        return $next($request);
    }
}
 