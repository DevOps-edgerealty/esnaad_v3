<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        if (!$token || $token !== 'schDv?8qat`6zLVZ;8Lwoy(g`/Asm%D88$a>7Wl,20amt[=uN1') {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
