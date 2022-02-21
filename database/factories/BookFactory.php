<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\BookCategorie;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->word,
        'author' => $faker->word,
        'description' => $faker ->sentence(),
        'photo' =>$faker-> randomElement(['book.jpg' , 'book2.jpg' , 'book3.jfif' , 'book4.jfif' , 'book.jpg']),
        'category_id'=> BookCategorie::get('id')->random(),
        'fichierpdf' =>$faker-> randomElement(['Version PDF Not Found']),
        'total' => $faker ->numberBetween(1,20),
    ];
});
