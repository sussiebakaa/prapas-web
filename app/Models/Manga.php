<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_rilis',
        'jumlah_chap',
        'author',
        'rating',
        
    ];

}
