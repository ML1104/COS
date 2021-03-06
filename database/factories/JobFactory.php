<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase(),
        'description' => $faker->sentence(),
        'email' => $faker->safeEmail
    ];
});
