<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookCategorie;
use Faker\Generator as Faker;

$factory->define(BookCategorie::class, function (Faker $faker) {
    return [
        'category' => $faker->word,
        'photoC' =>$faker-> randomElement(['categ.jpg']),
    ];
});
