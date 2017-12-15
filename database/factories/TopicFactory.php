<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'category_id' => null,
        'user_id' => 1,
        'title' => $faker->sentence,
        'body' => $faker->paragraph(7),
        'views' => $faker->numberBetween(0, 10000),
        'created_at' => $faker->datetimeBetween('-5 months'),
    ];
});
