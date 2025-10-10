<?php

use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/login', [App\Http\Controllers\LoginControllers::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\LoginControllers::class, 'login'])->name('login.post');
    Route::post('/logout', [App\Http\Controllers\LoginControllers::class, 'logout'])->name('logout');
    Route::get('/register', [App\Http\Controllers\RegisterControllers::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\RegisterControllers::class, 'register'])->name('register.post');
    Route::post('/register/check-email', [App\Http\Controllers\RegisterControllers::class, 'checkEmail'])->name('register.check-email');
    Route::post('/register/validate', [App\Http\Controllers\RegisterControllers::class, 'validateRegistration'])->name('register.validate');
    Route::get('/terms', [App\Http\Controllers\RegisterControllers::class, 'showTerms'])->name('terms');
    Route::get('/privacy', [App\Http\Controllers\RegisterControllers::class, 'showPrivacy'])->name('privacy');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/forgot-password', [App\Http\Controllers\LoginControllers::class, 'showForgotPasswordForm'])
        ->middleware('guest')
        ->name('password.request');

    Route::post('/forgot-password', [App\Http\Controllers\LoginControllers::class, 'sendResetLinkEmail'])
        ->middleware('guest')
        ->name('password.email');

    Route::get('/reset-password/{token}', [App\Http\Controllers\LoginControllers::class, 'showResetPasswordForm'])
        ->middleware('guest')
        ->name('password.reset');

    Route::post('/reset-password', [App\Http\Controllers\LoginControllers::class, 'resetPassword'])
        ->middleware('guest')
        ->name('password.update');
});
