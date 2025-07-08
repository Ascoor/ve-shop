<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

if (config('app.demo')) {
    Route::post('/demo-login/{role}', [DemoController::class, 'login'])
        ->whereIn('role', ['admin', 'vendor', 'customer']);
}
