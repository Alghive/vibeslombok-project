<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard'); // ini akan pakai admin layout
    })->name('/');

    Route::get('/daftar_user', function () {
        return view('admin.pages.user.daftar_user');
    })->name('daftar_user');

    Route::get('/edit_user', function () {
        return view('admin.pages.user.edit_user');
    })->name('edit_user');

    Route::get('/daftar_mobil', function () {
        return view('admin.pages.mobil.daftar_mobil');
    })->name('daftar_mobil');

    Route::get('/tambah_mobil', function () {
        return view('admin.pages.mobil.tambah_mobil');
    })->name('tambah_mobil');

    Route::get('/edit_mobil', function () {
        return view('admin.pages.mobil.edit_mobil');
    })->name('edit_mobil');

    Route::get('/daftar_wisata', function () {
        return view('admin.pages.paket_wisata.daftar_wisata');
    })->name('daftar_wisata');

    Route::get('/tambah_wisata', function () {
        return view('admin.pages.paket_wisata.tambah_wisata');
    })->name('tambah_wisata');

    Route::get('/edit_wisata', function () {
        return view('admin.pages.paket_wisata.edit_wisata');
    })->name('edit_wisata');

    Route::get('/daftar_blog', function () {
        return view('admin.pages.blog.daftar_blog');
    })->name('daftar_blog');

    Route::get('/tambah_blog', function () {
        return view('admin.pages.blog.tambah_blog');
    })->name('tambah_blog');

    Route::get('/edit_blog', function () {
        return view('admin.pages.blog.edit_blog');
    })->name('edit_blog');

    Route::get('/daftar_faq', function () {
        return view('admin.pages.faq.daftar_faq');
    })->name('daftar_faq');

    Route::get('/tambah_faq', function () {
        return view('admin.pages.faq.tambah_faq');
    })->name('tambah_faq');

    Route::get('/edit_faq', function () {
        return view('admin.pages.faq.edit_faq');
    })->name('edit_faq');
});
