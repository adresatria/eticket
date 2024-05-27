<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @return Response
     */
    public function handle(Request $request, Closure $next,...$role)
    {
        if (Auth::user()->role == 1) {
            return $next($request);
        }
        abort(404);
    }
}
