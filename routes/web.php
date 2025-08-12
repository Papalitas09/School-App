<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
  
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/dashboard', [DasboardController::class, 'index']);
Route::get('/teacher', [TeachersController::class, 'ListTeacher']);