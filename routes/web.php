<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;
// TUGAS 2 ELERNING
use App\Http\Controllers\MahasiswaController;
//BAB 6
use App\Http\Controllers\KaryawanController;
//TUGAS 3
use App\Http\Controllers\ProfilController;

/////////////////////////////////////////////////////////////////////////////////////////

Route::get('/welcome', function () {
    echo "Welcome";
});

Route::get('/get-test', function () {
    echo "Uji Coba route dengan method GET";
});

Route::post('/store', function () {
    //
});

Route::put('/update', function () {
    //
});

Route::delete('/delete', function () {
    //
});

Route::match(['get', 'post'], '/welcome', function () {
    //
});

Route::any('/all', function () {
    //
});

Route::get('/show/{id?}', function ($id = 1) {
    echo "Nilai Parameter Adalah " . $id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah " . $nama;
})->where('nama', '[A-Za-z]+');

Route::get('/index', function () {
    echo '<a href="' . route('create') . '">Akses Route dengan nama</a>';
});

Route::get('/create', function () {
    echo "Route diakses menggunakan nama";
})->name('create');

//////////////////////////////////////////////////////////////////////////////////////

Route::get('/produk', [produkController::class, 'index']);

Route::get('/produk', [produkController::class, 'index']);

// TUGAS 2 ELERNING
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

//BAB 6
Route::get('/pegawai', [KaryawanController::class, 'index']);

//TUGAS 3
Route::get('/profil', [ProfilController::class, 'index']);