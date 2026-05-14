<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::post('/movies', [App\Http\Controllers\MovieController::class, 'store']);
Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);
Route::get('/movies/{id}', [App\Http\Controllers\MovieController::class, 'show']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);