<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [NewController::class, 'staticRoute']);

Route::get('profile/{user}', [NewController::class, 'dynamicRoute']);

Route::get('fullname/{first_name}/{last_name}', [NewController::class, 'multipleRoute']);

Route::get('course/{course?}', [NewController::class, 'optionalRoute']);

Route::get('search/{user}', [NewController::class, 'conditionalRoute']);

Route::get('student_list', [NewController::class, 'arrayRoute']);