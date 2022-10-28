<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;



Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/login', [AuthController::class, 'loginform'])->name('login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');



Route::post('/create', [PostController::class, 'createPost'])->name('posts.create');
Route::get('/new-post', [PostController::class, 'form_createPost'])->name('posts.create.form')->middleware('admin');
Route::get('/load', [ PostController::class, 'posts'])->name('load.post')->middleware('auth');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('post.delete')->middleware('admin');
Route::get('/posts/edit/{id}',   [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/update/{id}',  [PostController::class, 'update'])->name('post.update');
Route::post('/posts/image/upload', [PostController::class, 'uploadPostImage'])->name('posts.image.upload');


Route::get('/profile',  [ProfileController::class, 'profile'])->name('profile');
Route::get( '/profile-edit',  [ProfileController::class, 'edit_profile'])->name('edit.profile');
Route::post('/profile-update/{id}',  [ProfileController::class, 'update_profile'])->name('update.profile');










