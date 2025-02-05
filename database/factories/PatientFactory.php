<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'division_id' => rand(1,40),
        'dob' => $faker->dateTimeBetween('-100 years', '-20 years'),
    ];
});
