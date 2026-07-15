<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // ===========================
    // MASTER DATA
    // ===========================

    Route::resource('schools', SchoolController::class);

    Route::resource('students', StudentController::class);

    Route::resource('guardians', GuardianController::class);

});

Route::middleware(['auth', 'role:Super Admin'])->group(function () {

    Route::resource('users', UserController::class);

});

Route::middleware(['auth', 'role:Super Admin|Admin'])->group(function () {

    Route::resource('teachers', TeacherController::class);

});

require __DIR__.'/auth.php';