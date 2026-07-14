<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\SchoolController;

Route::middleware(['auth'])->group(function () {

    Route::resource('schools', SchoolController::class);

});
use App\Http\Controllers\SchoolController;

Route::middleware(['auth'])->group(function () {
    Route::resource('schools', SchoolController::class);
});
use App\Http\Controllers\SchoolController;

Route::middleware(['auth'])->group(function () {

    Route::resource('schools', SchoolController::class);

});