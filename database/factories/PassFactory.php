<?php

use App\Pass;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Pass::class, function (Faker $faker) {
    return [
        'name' => 'Yellowstone Pass',
        'start' => Carbon::parse('May 1st ' . Carbon::now()->year),
        'end' => Carbon::parse('October 31st ' . Carbon::now()->year),
        'slug' => 'yellowstone_pass',
        'active' => 1
    ];
});
