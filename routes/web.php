<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\LibraryController;
use Illuminate\Http\Request;


// use App\Models\Attentance;
// use App\Models\Grade;
// use App\Models\Session;
// use Illuminate\Http\Request;



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

Route::get('/attentance',         [attendanceController::class, 'attentance'])->name('attendance');
Route::post('/create-grade',      [attendanceController::class, 'create_grade'])->name('create-grade');
Route::get('/session/{id}',       [attendanceController::class, 'session'])->name('session');
Route::get('/grade/{id}',         [attendanceController::class, 'grade'])->name('grade');
Route::post('/create-session',    [attendanceController::class, 'create_session'])->name('create-session');
Route::post('/collect-attendance',[attendanceController::class, 'collect_attendance'])->name('collect-attendance');
Route::get('/session/delete/{id}', [attendanceController::class, 'delete'])->name('session.delete');


Route::get( '/library', [LibraryController::class, 'library'])->name('library');
Route::get('/sorting/{id}', [LibraryController::class, 'show'])->name('show');
Route::get('/books/{id}', [LibraryController::class, 'showbook'])->name('showbook');
Route::get('/book/delete/{id}', [attendanceController::class, 'delete'])->name('book.delete');

Route::post('/create/sorting', [ LibraryController::class, 'CreatesSorting'])->name('create-sorting');
Route::post('/library', [LibraryController::class, 'Createlibrary'])->name('create-library');
Route::post('/create/books', [LibraryController::class, 'CreateBooks'])->name('create-books');






// Route::get('/new-lesson', [LessonController::class, 'form_createlesson'])->name('lesson.create.form')->middleware('admin');
// Route::post('/create/lesson', [LessonController::class, 'createlesson'])->name('lesson.create');


// Route::post('/create', [PostController::class, 'createPost'])->name('posts.create');
// Route::get('/new-post', [PostController::class, 'form_createPost'])->name('posts.create.form')->middleware('admin');
// Route::get('/load', [PostController::class, 'posts'])->name('load.post')->middleware('auth');
// Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->name('post.delete')->middleware('admin');
// Route::get('/posts/edit/{id}',   [PostController::class, 'edit'])->name('post.edit');
// Route::post('/posts/update/{id}',  [PostController::class, 'update'])->name('post.update');
// Route::post('/posts/image/upload', [PostController::class, 'uploadPostImage'])->name('posts.image.upload');






