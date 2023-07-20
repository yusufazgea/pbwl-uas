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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Kendaraan
Route::get('/kendaraan', [App\Http\Controllers\KendaraanController::class, 'index']);
Route::get('/kendaraan/create', [App\Http\Controllers\KendaraanController::class, 'create']);
Route::post('/kendaraan', [App\Http\Controllers\KendaraanController::class, 'store']);
Route::get('/kendaraan/{id}/edit', [App\Http\Controllers\KendaraanController::class, 'edit']);
Route::patch('/kendaraan/{id}', [App\Http\Controllers\KendaraanController::class, 'update']);
Route::delete('/kendaraan/{id}', [App\Http\Controllers\KendaraanController::class, 'destroy']);

//Pelanggan
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

//Pesanan
Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index']);
Route::get('/pesanan/create', [App\Http\Controllers\PesananController::class, 'create']);
Route::post('/pesanan', [App\Http\Controllers\PesananController::class, 'store']);
Route::get('/pesanan/{id}/edit', [App\Http\Controllers\PesananController::class, 'edit']);
Route::patch('/pesanan/{id}', [App\Http\Controllers\PesananController::class, 'update']);
Route::delete('/pesanan/{id}', [App\Http\Controllers\PesananController::class, 'destroy']);
