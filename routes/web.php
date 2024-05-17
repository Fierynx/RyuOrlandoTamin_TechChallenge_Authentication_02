<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function() { //yang bisa akses hanya yang belum login
    Route::get('/', function () {
        return view('login');
    });
    
    Route::get('/login', [LoginController::class, 'create']);
    
    Route::post('/login', [LoginController::class, 'store']);
    
    Route::get('/register', [RegisterController::class, 'create']);
    
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function () { //yg bisa akses hanya yg udh login
    Route::post('/logout', [UserController::class, 'logout']);

    Route::get('/dashboard', [UserController::class, 'dashboard']);
});


