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

Route::resource('users', UserController::class);
Route::resource('kliens', KlienController::class);
Route::resource('tipepekerjaans', TipePekerjaanController::class);
Route::resource('pekerjaans', PekerjaanController::class);
Route::resource('proyeks', ProyekController::class);
Route::resource('penawaranjasas', PenawaranJasaController::class);
Route::resource('permintaanjasas', PermintaanJasaController::class);
Route::resource('tagihans', TagihanController::class);
Route::resource('pembayaranataspembelians', PembayaranAtasPembelianController::class);
Route::resource('pesananpembelians', PesananPembelianController::class);
Route::resource('referensiperusahaans', ReferensiPerusahaanController::class);
Route::resource('referensibahasas', ReferensiBahasaController::class);

