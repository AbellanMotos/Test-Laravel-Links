<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Link;
use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'description' => $faker->paragraph,
        //
    ];
});
