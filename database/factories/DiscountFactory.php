<?php

use App\Pass;
use App\Vendor;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Discount::class, function (Faker $faker) {
    return [
        'vendor_id' => $faker->randomDigitNotNull,
        'pass_id' => $faker->randomDigitNotNull,
        'name' => ucwords($faker->catchPhrase) . " Discount",
        'description' => $faker->realText(),
        'hours' => '9am to 5pm',
        'limit' => $faker->numberBetween(2,10),
        'percent' => $faker->randomFloat(2,0.1,0.25),
        'active' => 1,
        'start' => Carbon::parse('5/1/'.Carbon::now()->year),
        'end' => Carbon::parse('10/31/'.Carbon::now()->year),
        'url' => $faker->url,
        'latitude' => $faker->latitude(43,45),
        'longitude' => $faker->longitude(-105,-115),
    ];
});
