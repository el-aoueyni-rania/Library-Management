<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookCategorie;
use Faker\Generator as Faker;

$factory->define(BookCategorie::class, function (Faker $faker) {
    return [
        'category' => $faker->word,
        'photoC' =>$faker-> randomElement(['categ.jpg' , 'cat2.jfif' , 'cat3.jfif' , 'cat4.jpg' , 'cat6.jpg']),
    ];
});
