<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

// Route::get('/', [TestController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);