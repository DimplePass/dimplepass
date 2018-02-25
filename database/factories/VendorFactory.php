<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->company,
        'url' => $faker->url,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'address1' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => $faker->postCode,
        'active' => 1,
    ];
});
