<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Login - Logout
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// User
Route::resource('users', UserController::class)->middleware('auth');
Route::get('/usuarios',[UserController::class, 'showIndex'])->middleware('auth');

// Excepcion de middleware para poder registrar un nuevo usuario
Route::get('/users/create',[UserController::class, 'create']);
Route::post('/users',[UserController::class, 'store']);
Route::put('/users/{user}',[UserController::class, 'update']);

// Client
Route::resource('clients', ClientController::class)->middleware('auth');
Route::get('/clientes',[ClientController::class, 'showIndex'])->middleware('auth');






