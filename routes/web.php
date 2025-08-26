<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use Database\Seeders\StudentSeeder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ironman;
  
Route::resource("/teachers", TeachersController::class);
Route::resource("/students", StudentController::class);
Route::get("/", [HomeController::class, 'index']);
Route::get("/about", [HomeController::class, 'about']);
Route::get("/dashboard", [DasboardController::class, 'index']);

