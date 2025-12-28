<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddCacheHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add cache headers for static assets
        if ($request->is('images/*') || $request->is('css/*') || $request->is('js/*')) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
        }

        // Add cache headers for HTML pages
        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $response->headers->set('Cache-Control', 'public, max-age=3600, must-revalidate');
        }

        return $response;
    }
}
