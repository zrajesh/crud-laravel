<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index'])
    ->name('index');

Route::post('/', [StudentController::class, 'create']);


Route::get('/edit/{id}', [StudentController::class, 'edit'])
    ->name('edit');

Route::put('/edit/{id}', [StudentController::class, 'update']);

Route::get('/delete/{id}', [StudentController::class, 'destroy'])
    ->name('destroy');

