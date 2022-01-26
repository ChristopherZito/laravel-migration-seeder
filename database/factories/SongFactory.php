<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'nome' => $faker ->word(),
        'time[s]' => $faker ->numberBetween(30,600),
        'testo' => $faker ->text(300),
        'price[c]' => $faker ->numberBetween(500,1000),
        'genre' => $faker ->word(),
    ];
});
