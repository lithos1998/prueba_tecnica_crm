<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/users', [ClientController::class, 'index']);
Route::middleware('auth:api')->get('/clients', [ClientController::class, 'index']);
