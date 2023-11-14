<?php

namespace App\Http\Controllers;
use App\Models\Manga;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index2()
    {
        return view('/Manga/manga', [
            "title" => "Manga",
            "manga" => Manga::all()
        ]);
        
    }
    public function show(Manga $manga)
    {
        return view('Manga.detailmanga', [
            "title" => "Detail Manga",
            "manga" => $manga
        ]);
        
    }
}
