<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->name('penduduk');
Route::get('/form_peristiwa/1', [App\Http\Controllers\PendudukController::class, 'form_penduduk_lahir'])->name('form_peristiwa');
Route::get('/form_peristiwa/2', [App\Http\Controllers\PendudukController::class, 'form_penduduk_masuk'])->name('form_peristiwa');
Route::get('/penduduk/cetak', [App\Http\Controllers\PendudukController::class, 'cetak'])->name('cetakPenduduk');
Route::get('/penduduk/cetak_biodata', [App\Http\Controllers\PendudukController::class, 'cetak_biodata'])->name('cetakBiodata');
Route::get('/penduduk/export_excel', [App\Http\Controllers\PendudukController::class, 'export_excel'])->name('exportExcel');
Route::get('/penduduk/detail', [App\Http\Controllers\PendudukController::class, 'detail'])->name('detailPenduduk');
Route::get('/penduduk/dokumen', [App\Http\Controllers\PendudukController::class, 'dokumen'])->name('dokumenPenduduk');
Route::get('/penduduk/form/1', [App\Http\Controllers\PendudukController::class, 'ubah'])->name('ubahPenduduk');
Route::get('/penduduk/ajax_penduduk_maps', [App\Http\Controllers\PendudukController::class, 'lokasi_warga'])->name('lokasiWarga');




Route::get('/keluarga', [App\Http\Controllers\KeluargaController::class, 'index'])->name('keluarga');
Route::get('/keluarga/anggota', [App\Http\Controllers\KeluargaController::class, 'anggota_keluarga'])->name('anggotaKeluarga');
Route::get('/keluarga/form_peristiwa/1', [App\Http\Controllers\KeluargaController::class, 'form_keluarga_lahir'])->name('form_keluarga_lahir');
Route::get('/keluarga/form_peristiwa/5', [App\Http\Controllers\KeluargaController::class, 'form_kepala_keluarga'])->name('form_kepala_keluarga');
Route::get('/keluarga/form_peristiwa/2', [App\Http\Controllers\KeluargaController::class, 'form_keluarga_masuk'])->name('form_keluarga_masuk');
Route::get('/keluarga/cetak', [App\Http\Controllers\KeluargaController::class, 'cetak'])->name('cetakKeluarga');
Route::get('/keluarga/kartu_keluarga', [App\Http\Controllers\KeluargaController::class, 'kartu_keluarga'])->name('kartuKeluarga');
Route::get('/keluarga/calon_pemilih', [App\Http\Controllers\KeluargaController::class, 'calon_pemilih'])->name('calonPemilih');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/redirect', 'App\Http\Controllers\Auth\LoginController@redirectToProvider');
Route::get('/auth/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback');
