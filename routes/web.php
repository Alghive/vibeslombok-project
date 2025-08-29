<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/detail-wisata', function () {
    return view('detail_wisata'); // otomatis cari resources/views/detail_wisata.blade.php
})->name('detail_wisata');

Route::get('/profile', function () {
    return view('profile'); // otomatis cari resources/views/profile.blade.php
})->name('profile');

Route::get('/guest', function () {
    return view('guest'); // otomatis cari resources/views/guest.blade.php
})->name('guest');

// Authentication routes
Route::get('/login', [App\Http\Controllers\LoginControllers::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginControllers::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\LoginControllers::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [App\Http\Controllers\RegisterControllers::class, 'showRegisterForm'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterControllers::class, 'register'])->name('register.post');
Route::post('/register/check-email', [App\Http\Controllers\RegisterControllers::class, 'checkEmail'])->name('register.check-email');
Route::post('/register/validate', [App\Http\Controllers\RegisterControllers::class, 'validateRegistration'])->name('register.validate');
Route::get('/terms', [App\Http\Controllers\RegisterControllers::class, 'showTerms'])->name('terms');
Route::get('/privacy', [App\Http\Controllers\RegisterControllers::class, 'showPrivacy'])->name('privacy');

// Profile routes (protected by auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileControllers::class, 'showProfile'])->name('profile');
    Route::post('/profile/update', [App\Http\Controllers\ProfileControllers::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/change-password', [App\Http\Controllers\ProfileControllers::class, 'changePassword'])->name('profile.change-password');
    Route::post('/profile/delete-account', [App\Http\Controllers\ProfileControllers::class, 'deleteAccount'])->name('profile.delete-account');
    Route::post('/profile/upload-picture', [App\Http\Controllers\ProfileControllers::class, 'uploadProfilePicture'])->name('profile.upload-picture');
    Route::get('/profile/data', [App\Http\Controllers\ProfileControllers::class, 'getProfileData'])->name('profile.data');
});

// API route for checking authentication
Route::get('/check-auth', [App\Http\Controllers\LoginControllers::class, 'checkAuth'])->name('check.auth');

// Test route for debugging
Route::get('/test-profile/{id}', function($id) {
    $user = \App\Models\User::find($id);
    if ($user) {
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'profile_picture' => $user->profile_picture,
            'has_picture' => !empty($user->profile_picture),
            'full_path' => $user->profile_picture ? asset('storage/' . $user->profile_picture) : null
        ]);
    }
    return response()->json(['error' => 'User not found']);
});

// Test upload route
Route::post('/test-upload', function(\Illuminate\Http\Request $request) {
    if ($request->hasFile('profile_picture')) {
        $file = $request->file('profile_picture');
        $filename = time() . '_test.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('profile-pictures', $filename, 'public');
        
        return response()->json([
            'success' => true,
            'path' => $path,
            'full_url' => asset('storage/' . $path)
        ]);
    }
    return response()->json(['error' => 'No file uploaded']);
});

// Test page route
Route::get('/test-upload-page', function() {
    return view('test-upload');
});

Route::get('/register', function () {
    return view('register');
})->name('register');
