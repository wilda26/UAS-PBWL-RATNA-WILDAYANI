<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // Spp
    Route::get('/spp', [App\Http\Controllers\SppController::class, 'index'])->name('spp');
    Route::get('/spp/edit/{id}', [App\Http\Controllers\SppController::class, 'edit'])->name('spp.edit');
    Route::patch('/spp/update/{id}', [App\Http\Controllers\SppController::class, 'update'])->name('spp.update');

    // Siswa
    Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa/store', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
    Route::patch('/siswa/update/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/siswa/delete/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');

    // Pembayaran
    Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
    Route::post('/pembayaran/store', [App\Http\Controllers\PembayaranController::class, 'store'])->name('pembayaran.store');
});
