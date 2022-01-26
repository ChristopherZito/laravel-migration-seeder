<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'nome',
        'cognome',
        'eta',
        'genere_musicale',
        'descrizione_artista',
        'nickname',
    ];
}
