<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', [UserController::class, 'list']);
Route::post('users/store', [UserController::class, 'store']);
Route::resource('courses', CourseController::class);
