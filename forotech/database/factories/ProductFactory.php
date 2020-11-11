<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'price'=>$faker->numberBetween($min = 100, $max = 9000),
        'link'=>$faker->url,
    ];
});
