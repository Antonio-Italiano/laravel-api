<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Preparo la rotta per ricevere una lista dei progetti
Route::get('/projects', [ProjectController::class, 'index']);

// per ricevere tutte le rotte che servono per Api
// Route::apiResource('projects', ProjectController::class);