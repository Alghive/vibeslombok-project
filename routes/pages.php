<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('/');

    Route::get('/detail-wisata', function () {
        return view('detail_wisata'); // otomatis cari resources/views/detail_wisata.blade.php
    })->name('detail_wisata');

    Route::get('/profile', function () {
        return view('profile'); // otomatis cari resources/views/profile.blade.php
    })->name('profile');

    Route::get('/guest', function () {
        return view('guest'); // otomatis cari resources/views/guest.blade.php
    })->name('guest');

    Route::get('/rent-car', function () {
        return view('rent-car'); // otomatis cari resources/views/rent-car.blade.php
    })->name('rent-car');

    Route::get('/tour-package', function () {
        return view('tour-package'); // otomatis cari resources/views/tour-package.blade.php
    })->name('tour-package');

    Route::get('/blog', function () {
        return view('blog'); // otomatis cari resources/views/blog.blade.php
    })->name('blog');

    Route::get('/detail_blog', function () {
        return view('detail_blog'); // otomatis cari resources/views/detail_blog.blade.php
    })->name('detail_blog');

    Route::get('/faq', function () {
        return view('faq'); // otomatis cari resources/views/faq.blade.php
    })->name('faq');

    Route::get('/about', function () {
        return view('about'); // otomatis cari resources/views/about.blade.php
    })->name('about');
});
