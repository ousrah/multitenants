<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->get('lang', session('locale', config('app.locale')));

        if (in_array($locale, ['fr', 'ar', 'en', 'es', 'nl'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);

            // Set RTL direction for Arabic
            $direction = in_array($locale, ['ar']) ? 'rtl' : 'ltr';
            session(['direction' => $direction]);
        }

        return $next($request);
    }
}
