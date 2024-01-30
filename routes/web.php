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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pengembalian', [App\Http\Controllers\HomeController::class, 'pengembalian'])->name('pengembalian');
Route::put('/pengembalian/update/{id}', [App\Http\Controllers\PenyewaanController::class, 'update'])->name('pengembalian.update');
Route::get('/pengembalian/search', [App\Http\Controllers\HomeController::class, 'search'])->name('pengembalian.search');



Route::get('/kelolakendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('kelolakendaraan.index');
Route::get('/kelolakendaraan/create', [App\Http\Controllers\KendaraanController::class, 'create'])->name('kelolakendaraan.create');
Route::post('/kelolakendaraan', [App\Http\Controllers\KendaraanController::class, 'store'])->name('kelolakendaraan.store');
Route::get('/kelolakendaraan/edit/{id}', [App\Http\Controllers\KendaraanController::class, 'edit'])->name('kelolakendaraan.edit');
Route::put('/kelolakendaraan/update/{id}', [App\Http\Controllers\KendaraanController::class, 'update'])->name('kelolakendaraan.update');
Route::delete('/kelolakendaraan/destroy/{id}', [App\Http\Controllers\KendaraanController::class, 'destroy'])->name('kelolakendaraan.destroy');

Route::post('/penyewaan', [App\Http\Controllers\PenyewaanController::class, 'store'])->name('penyewaan.store');

