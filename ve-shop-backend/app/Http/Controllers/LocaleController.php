<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function switch(string $locale): JsonResponse
    {
        if (! in_array($locale, ['en', 'ar'])) {
            return response()->json(['message' => __('messages.invalid_locale')], 422);
        }

        App::setLocale($locale);

        return response()->json([
            'message' => __('messages.locale_switched'),
            'locale' => $locale,
        ]);
    }
}
