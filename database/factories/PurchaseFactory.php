<?php

use App\CreditCard;
use App\RandomPurchaseConfirmationNumberGenerator;
use App\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(User::class)->create()->id,
        'confirmation_number' => (new RandomPurchaseConfirmationNumberGenerator)->generate(),
        'purchase_date' => Carbon::now(),
        'credit_card_id' => factory(CreditCard::class)->create()->id,
        'stripe_charge_id' => '',
        
    ];
});
