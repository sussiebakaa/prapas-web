<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        return view('/Anime/anime', [
            "title" => "Anime",
            "anime" => Anime::all()
        ]);
        
    }
    public function show(Anime $anime)
    {
        return view('Anime.detailnime', [
            "title" => "Detail Anime",
            "anime" => $anime
        ]);
        
    }

}
