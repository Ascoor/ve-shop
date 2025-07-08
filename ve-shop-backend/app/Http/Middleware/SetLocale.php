<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->input('locale') ?? $request->header('Accept-Language');
        if ($locale) {
            $locale = substr($locale, 0, 2);
            if (in_array($locale, ['en', 'ar'])) {
                App::setLocale($locale);
            }
        }
        return $next($request);
    }
}
