<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [ UserController::class, 'users'])->name('users');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/create-user', [UserController::class, 'user'])->name('user');
