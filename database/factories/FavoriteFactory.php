<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Favorite;
use Faker\Generator as Faker;

$factory->define(Favorite::class, function (Faker $faker) {
    return [

        'title' => $faker->city,
        'year' => $faker->numberBetween($min = 1940, $max = 2019),
        'plot' => $faker->sentence(15),
        'genre' => $faker->jobTitle,
        'actors' => $faker->name,
        'director' => $faker->name,
        'runtime' => $faker->numberBetween($min = 60, $max = 180),
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'imdbID' => $faker->isbn10

    ];
});
