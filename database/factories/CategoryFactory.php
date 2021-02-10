<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'image' => $faker->imageUrl,
        'id_promotion' => factory(\App\Promotion::class)
    ];
});
