<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('/belajar', function () {
    echo "<div style='text-decoration: underline; text-align:center'>";
    echo '<h1>HALO SEMUANYA</h1><br>';
    echo '<h1>Kami sedang belajar laravel dasar</h1>';
    echo '</div>';
});

// Route Basic View
Route::get('/home', function () {
    return view('home');
});

// Menggunakan Tambahan Folder
Route::get('/pages', function () {
    return view('pages.index');
});

Route::get('/pages/about', function () {
    return view('pages.about');
});

Route::get('/pages/content', function () {
    return view('pages.content');
});

// Route Parameter
Route::get('/pages/biodata/{nama}/{umur}/{alamat}/{jk}/{kelas}/{hobby}', function ($nama, $umur, $alamat, $jk, $kelas, $hobby) {
    return view('pages.biodata', compact('nama', 'umur', 'alamat', 'jk', 'kelas', 'hobby'));
});

// Route Opsional Parameter
Route::get('/pages/pesanan/{makanan1?}/{makanan2?}', function ($makanan1 = 'Pesanan tidak ada', $makanan2 = 'Pesanan tidak ada') {
    return view('pages.pesanan', compact('makanan1', 'makanan2'));
});

// Passing data dari controllers ke view
Route::get('/pengenalan', [PengenalanController::class, 'pengenalan']);

// Passing data dinamis (route parameter) dari controllers ke view
Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/siswa', [PengenalanController::class, 'siswa']);

Route::get('/latihan', [LatihanController::class, 'latihan1']);
Route::get('/latihan2', [LatihanController::class, 'latihan2']);
Route::get('/latihan3', [LatihanController::class, 'latihan3']);

// Route database

// Route::get('/post', [PostController::class, 'index']);

Route::resource('/post', PostController::class);
