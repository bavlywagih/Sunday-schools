<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('index');
})->name('index');


// Route::prefix('admin')->middleware('auth')->group(function() {
// link for page admins
// });



Route::get('/login-admin', function () {
    return view('pages/login-admin');
})->name('login.form.admin')->middleware('guest');


Route::post('/login/admin', [adminController::class, 'login'])->name('login');


Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('index');
})->name('logout')->middleware('auth');


Route::get('/post', function () {
    return view('pages.post');

})->name('page.posts')->middleware('admin');


