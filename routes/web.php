<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Login - Logout
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// User resources
Route::resource('users', UserController::class)->middleware('auth');

// Excepcion de middleware para poder registrar un nuevo usuario
Route::get('users/create',[UserController::class, 'create']);

// Client resources
Route::resource('clients', ClientController::class)->middleware('auth');


