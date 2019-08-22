<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request; //api

class ForceJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json'); //api
        return $next($request);
    }
}
