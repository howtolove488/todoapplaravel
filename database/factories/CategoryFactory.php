<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => implode(' ', $faker->words(2)),
        'description' => $faker->sentence(),
    ];
});
