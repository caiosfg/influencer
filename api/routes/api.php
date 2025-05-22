<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::post('login', [AuthController::class, 'login']);

Route::apiResource('/users', UserController::class);

