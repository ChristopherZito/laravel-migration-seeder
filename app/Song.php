<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'nome',
        'time[s]',
        'testo',
        'price[c]',
        'genre',
        
    ];
}
