<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, bool|string $isadmin = true): Response
    {
        abort_unless(Auth::check() && Auth::user()->isadmin == $isadmin, 401);
        return $next($request);
    }
}
