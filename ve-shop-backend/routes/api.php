<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\LocaleController;
use App\Http\Middleware\SetLocale;

Route::middleware([SetLocale::class])->group(function (): void {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::post('locale/{locale}', [LocaleController::class, 'switch']);
});
