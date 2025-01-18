<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\UmkmController;
use App\Models\Umkm;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/pertanian', [PertanianController::class, 'index']);
Route::get('/umkm', [UmkmController::class, 'index']);
Route::get('/tentang', fn() => view('tentang'));
