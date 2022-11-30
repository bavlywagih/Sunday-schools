<?php

use App\Models\Grade;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attendanceController;

Route::get('/attendance', [ attendanceController::class, 'attendance'])->name('attendance');
Route::post( '/create-grade', [attendanceController::class, 'CreateGrade'])->name('create-grade');
Route::post('/create-session', [ attendanceController::class, 'CreateSession'])->name('create-session');
Route::post('/collect-attendance', [attendanceController::class, 'CollectAttendance'])->name('collect-attendance');



