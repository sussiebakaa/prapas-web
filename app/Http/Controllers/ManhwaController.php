<?php

namespace App\Http\Controllers;

use App\Models\Manhwa;
use Illuminate\Http\Request;

class ManhwaController extends Controller
{
    public function index3()
    {
        return view('/Manhwa/manhwa', [
            "title" => "Manhwa",
            "manhwa" => Manhwa::all()
        ]);
        
    }
    public function show(Manhwa $manhwa)
    {
        return view('Manhwa.detailman', [
            "title" => "Detail Manhwa",
            "manhwa" => $manhwa
        ]);
        
}
}
