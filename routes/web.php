<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [ItemController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index']);
