<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
     return view('index');
 });


//Profil
Route::get('pegawai', function () {
    return view('frontend.profil.pegawai');
});
Route::get('program', function () {
    return view('frontend.profil.program');
});
Route::get('struktur', function () {
    return view('frontend.profil.struktur');
});
Route::get('tupoksi', function () {
    return view('frontend.profil.tupoksi');
});
Route::get('visi', function () {
    return view('frontend.profil.visi');
});

//Berita
Route::get('news', function () {
    return view('frontend.berita.news');
});

//Informasi
Route::get('agenda', function () {
    return view('frontend.informasi.agenda');
});
Route::get('aplikasi', function () {
    return view('frontend.informasi.aplikasi');
});
Route::get('dokumen', function () {
    return view('frontend.informasi.dokumen');
});
Route::get('pengumuman', function () {
    return view('frontend.informasi.pengumuman');
});
Route::get('tower', function () {
    return view('frontend.informasi.tower');
});

//Layanan
Route::get('emailins', function () {
    return view('frontend.layanan.emailins');
});
Route::get('hosting', function () {
    return view('frontend.layanan.hosting');
});
Route::get('reqdata', function () {
    return view('frontend.layanan.reqdata');
});
Route::get('tte', function () {
    return view('frontend.layanan.tte');
});
Route::get('zoom', function () {
    return view('frontend.layanan.zoom');
});
 