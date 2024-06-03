<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\FormationController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('auth/login', [AuthController::class,'login'])->name('connect');



Route::prefix('admin')->name('admin.')->group(function() {
Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('formation', FormationController::class);
    Route::resource('experience', ExperienceController::class);
});