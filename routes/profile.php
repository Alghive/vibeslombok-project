<?php

use Illuminate\Support\Facades\Route;

Route::prefix('account')->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [App\Http\Controllers\ProfileControllers::class, 'showProfile'])->name('profile');
        Route::post('/profile/update', [App\Http\Controllers\ProfileControllers::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/change-password', [App\Http\Controllers\ProfileControllers::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/delete-account', [App\Http\Controllers\ProfileControllers::class, 'deleteAccount'])->name('profile.delete-account');
        Route::post('/profile/upload-picture', [App\Http\Controllers\ProfileControllers::class, 'uploadProfilePicture'])->name('profile.upload-picture');

        // Add this new route for address update
        Route::post('/profile/update-address', [App\Http\Controllers\ProfileControllers::class, 'updateAddress'])->name('profile.update-address');

        Route::post('/profile/delete-account', [App\Http\Controllers\ProfileControllers::class, 'deleteAccount'])->name('profile.delete-account');
        Route::get('/profile/data', [App\Http\Controllers\ProfileControllers::class, 'getProfileData'])->name('profile.data');
    });
});
