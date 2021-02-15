<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => factory(\App\Category::class),
		'subcategory_id' => factory(\App\Subcategory::class),
		'title' => $faker->sentence(4),
		'description' => $faker->paragraph,
		'real_price' => $faker->randomFloat(2, 1, 100),
		'offer_price' => $faker->randomFloat(2, 1, 100),
		'offer_percent' => $faker->numberBetween(1, 100),
		'shipping_days' => $faker->numberBetween(1, 10),
		'shipping_price' => $faker->randomFloat(),
    ];
});
