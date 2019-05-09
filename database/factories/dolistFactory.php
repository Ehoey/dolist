<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\dolist;
use Faker\Generator as Faker;

$factory->define(dolist::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        'completed' => false
    ];
});
