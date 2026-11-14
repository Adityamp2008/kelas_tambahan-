<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    });
    
    Route::get('siswa/index', [SiswaController::class, 'index']);
    Route::get('guru/index', [GuruController::class, 'index']);
    Route::get('mapel/index', [MapelController::class, 'index']);
    
    // Route Kelas
    Route::get('/kelas', [KelasController::class,'index'])->name('kelas.index');
    Route::get('kelas/create', [KelasController::class,'create'])->name('kelas.create');
    Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
    route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
    
    
    
// Route::get('/kelas/create', [KelasController::class,'create']);
// Route::get('kelas/create', [KelasController::class,'index']);



// Route::post('/kelas/store', [KelasController::class, 'store'] );
// Route::get('/kelas/edit/{id}', [KelasController::class,'edit']);
// Route::post('/kelas/update/{id}', [KelasController::class,'update']);
// Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy']);