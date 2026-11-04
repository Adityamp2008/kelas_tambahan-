<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('siswa/index', [SiswaController::class, 'index']);
Route::get('guru/index', [GuruController::class, 'index']);
Route::get('mapel/index', [MapelController::class, 'index']);