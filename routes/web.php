<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes

Route::get('/login', function () {

    if (Auth::check()) {
        return redirect()->intended('dashboard/overview');
    }

    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/enroll', function () {

    if (Auth::check()) {
        return redirect()->intended('dashboard/overview');
    }

    return view('auth.enroll');
});

Route::post('/enroll', [AuthController::class, 'enroll'])->name('enroll');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard/overview', [DashboardController::class, 'home'])->middleware('auth')->name('dashboard');
