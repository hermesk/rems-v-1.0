<?php

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'idno'=>$faker->unique()->randomNumber($nbDigits = 8),
        'mobile'=>$faker->phoneNumber,
    ];
});
