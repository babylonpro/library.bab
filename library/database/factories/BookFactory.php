<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $title = $faker->sentence(rand(1,5));
    return [
        'title' => $title,
        'isbn' => $faker->unique()->isbn13,
        'is_giveout' => $faker->boolean
    ];
});
