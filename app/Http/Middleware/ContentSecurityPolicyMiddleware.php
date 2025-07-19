<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicyMiddleware
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
        $response = $next($request);

        $csp = "default-src 'self'; ";
        $csp .= "script-src 'self' 'unsafe-inline'; ";
        $csp .= "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; ";
        $csp .= "font-src 'self' https://fonts.gstatic.com; ";
        $csp .= "img-src 'self' data: https:; ";
        $csp .= "connect-src 'self' ws://localhost:3000; ";

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
