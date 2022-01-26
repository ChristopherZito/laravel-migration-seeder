<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'nome'=> $faker ->firstName(),
        'cognome'=> $faker ->lastName(),
        'eta'=> $faker ->numberBetween(16,40),
        'genere_musicale'=> $faker ->word(),
        'descrizione_artista'=> $faker ->text(200),
        'nickname' => $faker -> word(),
    ];
});
