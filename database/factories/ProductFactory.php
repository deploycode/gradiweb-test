<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    try {
        return [
            'name' => $faker->word,
            'description' => $faker->paragraph,
            'photo' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
            'price' => $faker->numberBetween($min = 1000, $max = 9000),
        ];
    } catch (Exception $e) {
        return [
            'name' => $faker->word,
            'description' => $faker->paragraph,
            'price' => $faker->numberBetween($min = 1000, $max = 9000),
        ];
    }

});
