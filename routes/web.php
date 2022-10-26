<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/login/admin', [AuthController::class, 'loginform'])->name('login.form')->middleware('guest');
Route::post('/login/admin', [AuthController::class, 'login'])->name('login')->middleware('guest');



Route::post('/create', [PostController::class, 'createPost'])->name('posts.create');
Route::get('/new-post', [PostController::class, 'form_createPost'])->name('posts.create.form')->middleware('admin');
Route::get('/load', [ PostController::class, 'posts'])->name('load.post')->middleware('auth');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('post.delete')->middleware('admin');
Route::get('/posts/edit/{id}',   [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/update/{id}',  [PostController::class, 'update'])->name('post.update');










