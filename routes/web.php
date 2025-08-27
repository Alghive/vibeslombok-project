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

Route::get('/login', function () {
    return view('login'); // otomatis cari resources/views/login.blade.php
})->name('login');

