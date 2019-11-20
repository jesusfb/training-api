<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {

    $authors = App\Author::pluck('id')->toArray();
    $genres = App\Genre::pluck('id')->toArray();

    return [
        'name' => $faker->company,
        'author_id' => $faker->randomElement($authors),
        'genre_id' => $faker->randomElement($genres)
    ];
});
