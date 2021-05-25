<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Movie;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> word,
        'original_title' => $faker -> word,
        'nationality' => $faker -> word,
        'date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'vote' => $faker -> randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10)
    ];
});
