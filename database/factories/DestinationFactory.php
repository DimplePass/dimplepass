<?php

use App\Destination;
use Faker\Generator as Faker;

$factory->define(Destination::class, function (Faker $faker) {
    return [
        'name' => 'Yellowstone National Park',
        'tagline' => "Adventure's first national park.",
        'latitude' => '44.45901000',
        'longitude' => '-110.82901100',
        'slug' => 'yellowstone'
    ];
});
