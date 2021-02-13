<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl(552, 224),
        'shipping' => 'SCHNELLE LIEFERUNG',
        'offer_percent' => $faker->numberBetween(1, 100),
        'offer_from' => $faker->unixTime,
        'offer_to' => $faker->unixTime,
    ];
});
