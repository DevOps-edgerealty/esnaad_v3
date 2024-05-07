<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->method() === 'GET') {
            $segment = $request->segment(1);

            // dd($segment);

            if (!in_array($segment, config('app.locales'))) {
                return redirect()->to('https://esnaad.com/en');

            }
            session(['locale' => $segment]);
            app()->setLocale($segment);
        }
        return $next($request);
    }
}
