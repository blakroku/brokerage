<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/enroll', function () {
    return view('auth.enroll');
});
