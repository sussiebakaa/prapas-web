<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Halaman Utama"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "pengguna" => "Sussiebaka",
        "email" => "vania.aisha.r@gmail.com",
        "tanggalbergabung" => "01-11-2018",
        "foto" => "img/pfp.png"
    ]);
});

Route::get('/Anime/anime', [
    AnimeController::class, 'index']);

Route::get('/Anime/detailnime/{anime}',[AnimeController::class, 'show']);  

Route::get('/Manga/manga', [
    MangaController::class, 'index2']);

Route::get('/Manga/detailmanga/{manga}',[MangaController::class, 'show']);  

