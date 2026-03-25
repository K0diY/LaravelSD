<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('client')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index']);
    Route::get('/conferences/{id}', [ClientController::class, 'show']);
});

Route::prefix('employee')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index']);
    Route::get('/conferences/{id}', [EmployeeController::class, 'show']);
});