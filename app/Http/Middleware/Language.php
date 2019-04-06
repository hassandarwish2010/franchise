<?php

namespace App\Http\Middleware;

use Closure;

class Language
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

        if (! array_key_exists($request->segment(1), $locales)) {
          $prev_path = url()->previous();
          $current_path = preg_replace('/$request->segment(1)/', 'ar', $prev_path, 1);
          return redirect(url($current_path));
        }

        app()->setLocale($request->segment(1));

        return $next($request);
    }
}
