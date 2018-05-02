<?php

use App\PromoCode;
use Faker\Generator as Faker;

$factory->define(PromoCode::class, function (Faker $faker) {
    return [
        //
        'code' => $faker->randomNumber(6),
        'discount' => $faker->numberBetween(200,400),
        'commission' => .20,
        'active' => 1
    ];
});
