<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('users', [usersController::class, 'index']);
//Route::get('users/{id}', [usersController::class, 'show']);
//Route::post('users', [usersController::class, 'store']);
//Route::put('users/{id}', [usersController::class, 'update']);
//Route::delete('users/{id}', [usersController::class, 'destroy']);
//Route::apiResource('users', usersController::class);
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('register', [AuthenticationController::class, 'register']);

Route::middleware('auth:sanctum')->apiResource('users', usersController::class);
Route::middleware('auth:sanctum')->post('/logout', [AuthenticationController::class, 'logout']);
