<?php

namespace App\Http\Middleware;

use Closure;

class ApiLanguage
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
        $locales = locales();

        if (! array_key_exists($request->segment(2), $locales)) {
          app()->setLocale('en');
        }
        app()->setLocale($request->segment(2));

        return $next($request);
    }
}
