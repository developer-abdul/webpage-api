<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PageLayoutController;


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::group([
    'middleware' => ['auth:sanctum'],
], function ($router) {
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('page-layouts', PageLayoutController::class);
});
