<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;

Route::controller(JurusanController::class)->group(function () {
    Route::get('jurusan', 'index');
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan/create', 'create');
    Route::post('jurusan/create', 'store');
    Route::get('/jurusan/{id}/show', [JurusanController::class, 'show'])->name('jurusan.show');
    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::delete('/jurusan/{id}/delete', [JurusanController::class, 'destroy'])->name('jurusan.delete');
    Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('mahasiswa', 'index');
    Route::get('mahasiswa/create', 'create');
    Route::post('mahasiswa/create', 'store');
    Route::get('jurusan/{jurusan}/show', 'show');
});
