<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SiswaController;

Route::get('/', function () {

    return view('welcome');

});

// Jalur autentikasi (Login, Register, Password Reset)

Auth::routes();

// Route untuk Dashboard setelah login

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Jalur Resource CRUD Data Siswa (Dilindungi Middleware Auth)

Route::middleware(['auth'])->group(function () {

    Route::resource('siswa', SiswaController::class);

});
