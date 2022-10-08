<?php

use App\Models\Mahasiswa;
use App\Models\Prodi;
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
//     return view('welcome', ['title' => 'Praktikum']);
// });

// Route::get('/', function () {
//     return view('home', [ 
//         'title' => 'Praktikum',
//         "prodis" => [
//             [
//                 "logo" => "bi-emoji-smile-upside-down",
//                 "nama" => "Informatika",
//                 "fakultas" => "Teknik"
//             ],
//             [
//                 "logo" => "bi-emoji-smile",
//                 "nama" => "Akuntansi",
//                 "fakultas" => "Ekonomi Dan Bisnis"
//             ],
//             [
//                 "logo" => "bi-emoji-sunglasses",
//                 "nama" => "Fisika",
//                 "fakultas" => "Matematika dan Ilmu Pengetahuan Alam"
//             ]
//         ]
//     ]);
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Praktikum',
        'prodis' => Prodi::all(),
        'mahasiswas' => Mahasiswa::all()
    ]);
})->name('home');

Route::get('/login', function () {  return 'Halaman Login'; })->name('login');

Route::get('/user/{nama}', function ($name) {
    return view('user', ['name' => $name]);
});