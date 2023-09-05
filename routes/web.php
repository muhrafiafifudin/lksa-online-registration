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

require __DIR__ . '/auth.php';

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     if (Auth::user()) {
//         return redirect()->route('dashboard');
//     }
//     return view('pages.auth.login');
// });

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('dashboard');
    }
    return view('pages.auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Assesmen Pendaftaran
    Route::resource('pendaftaran', 'App\Http\Controllers\Pendaftaran\PendaftaranController');
    // Assesmen Anak & OrTu
    Route::resource('assesmen-anak-ortu', 'App\Http\Controllers\Form\AssesmenAnakOrtuController');
    // Assesmen Anak
    Route::resource('assesmen-anak', 'App\Http\Controllers\Form\AssesmenAnakController');
    // Berita Acara
    Route::resource('berita-acara', 'App\Http\Controllers\Form\BeritaAcaraController');
    // Surat Pernyataan
    Route::resource('surat-pernyataan', 'App\Http\Controllers\Form\SuratPernyataanController');
    // Kontrak Pelayanan
    Route::resource('kontrak-pelayanan', 'App\Http\Controllers\Form\KontrakPelayananController');
    // Hasil Intervensi
    Route::resource('hasil-intervensi', 'App\Http\Controllers\Form\HasilIntervensiController');
    // Form Reunifikasi
    Route::resource('form-reunifikasi', 'App\Http\Controllers\Form\FormReunifikasiController');
    // Rujukan Anak
    Route::resource('rujukan-anak', 'App\Http\Controllers\Form\RujukanAnakController');
    // Terminasi
    Route::resource('terminasi', 'App\Http\Controllers\Form\TerminasiController');
    // Berkas Pendukung
    Route::resource('berkas-pendukung', 'App\Http\Controllers\Form\BerkasPendukungController');
    // Pengguna
    Route::resource('pengguna', 'App\Http\Controllers\Sistem\PenggunaController');
});
