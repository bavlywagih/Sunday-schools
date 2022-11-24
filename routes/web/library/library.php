<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;




Route::get('/library', [LibraryController::class, 'library'])->name('library');
Route::get('/sorting/{id}', [LibraryController::class, 'show'])->name('show');
Route::get('/books/{id}', [LibraryController::class, 'showbook'])->name('showbook');
Route::get( '/sortings/delete/{id}', [LibraryController::class, 'deletesortings'])->name('sortings.delete');
Route::get('/book/delete/{id}', [LibraryController::class, 'deletebook'])->name('book.delete');
Route::get('/sortings/edit/{id}', [LibraryController::class, 'editsortings'])->name('editsortings');



Route::post('/sortings/edit/{id}', [LibraryController::class, 'sortingsedit'])->name('sortings.edit');
Route::post('/book/edit/{id}', [ LibraryController::class, 'bookedit'])->name('book.edit');
Route::post('/create/sorting', [LibraryController::class, 'CreatesSorting'])->name('create-sorting');
Route::post('/library', [LibraryController::class, 'Createlibrary'])->name('create-library');
Route::post('/create/books', [LibraryController::class, 'CreateBooks'])->name('create-books');
