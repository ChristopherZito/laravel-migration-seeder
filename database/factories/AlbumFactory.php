<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        
        'nome' => $faker ->word(),
        'genere_album' => $faker ->word(),
        'storia_album' => $faker ->text(300),
        'data_rilascio' => $faker -> date('Y_m_d'),
    ];
});
