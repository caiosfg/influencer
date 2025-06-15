<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::post('login', [AuthController::class, 'login']);
Route::post('register/{id}', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResource('/users', UserController::class);
});


