<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/profile',  [ProfileController::class, 'profile'])->name('profile');
Route::get('/profile-edit',  [ProfileController::class, 'edit_profile'])->name('edit.profile');
Route::post('/profile-update/{id}',  [ProfileController::class, 'update_profile'])->name('update.profile');
