<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        /* 'artist_id',
        'song_id', */
        'nome',
        'genere_album',
        'storia_album',
        'data_rilascio',
        
    ];
}
