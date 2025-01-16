<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertanian', fn() => view('pertanian'));
Route::get('/umkm', fn() => view('umkm'));
Route::get('/tentang', fn() => view('tentang'));
