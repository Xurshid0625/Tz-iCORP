<?php

use App\Http\Controllers\Api\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/start', [TestController::class, 'start']);
Route::post('/receiver', [TestController::class, 'receiver'])->name('receiver');
Route::get('/result', [TestController::class, 'result']);
