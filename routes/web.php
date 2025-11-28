<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
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
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "nama" => "Ganjar Pranowo", 
        "nohp" => "08123456789",
        "foto" => "img/ganjar.webp",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');

Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "gmail" => "wafiq.zuhayr123@gmail.com",
        
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "pembuat" => "Mahasiswa Universitas Muhammadiyah Semarang",
        
    ]);
});


