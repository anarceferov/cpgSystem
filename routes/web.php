<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('admin/')->middleware('isLogin')->group(function () {
    Route::view('login', 'back.login')->name('admin.login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('admin.login.post');
});


Route::prefix('admin/')->middleware('isAdmin')->group(function () {
    Route::view('dashboard', 'back.dashboard')->name('dashboard');

});
