<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Events\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);

Route::post('create', [EventController::class, 'store']);
Route::get('events', [EventController::class, 'index']);
Route::delete('user-events', [EventController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



