<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/detail-wisata', function () {
    return view('detail_wisata'); // otomatis cari resources/views/detail_wisata.blade.php
})->name('detail_wisata');

