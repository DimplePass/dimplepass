<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(User::class)->create()->id,
        'stripe_credit_card_id' => '',
        'stripe_customer_id' => '',
        'brand' => $faker->creditCardType,
        'last4' => substr($faker->creditCardNumber, -4),
        'exp_month' => Carbon::now()->month,
        'exp_year' => Carbon::now()->addYears(2)->year,
        'code' => '123',
        'default' => 1
    ];
});
