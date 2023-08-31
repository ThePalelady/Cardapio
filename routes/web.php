<?php

use Illuminate\Support\Facades\Route;

Route::post('/comidas', [ComidaController::class, 'store']);

Route::get('/comidas/{id}', [ComidaController::class, 'show']);

Route::put('/comidas/{id}', [ComidaController::class, 'update']);

Route::delete('/comidas/{id}', [ComidaController::class, 'destroy']);


