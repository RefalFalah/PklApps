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

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('/belajar', function () {
    echo "<div style='text-decoration: underline; text-align:center'>";
    echo "<h1>HALO SEMUANYA</h1><br>";
    echo "<h1>Kami sedang belajar laravel dasar</h1>";
    echo "</div>";
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
Route::get('/pages/pesanan/{makanan?}', function ($makanan = 'Pesanan anda tidak ada!') {
    return view('pages.pesanan', compact('makanan'));
});
