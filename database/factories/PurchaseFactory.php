<?php

use App\CreditCard;
use App\Pass;
use App\Purchase;
use App\RandomPurchaseConfirmationNumberGenerator;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        //
        'user_id' => factory(User::class)->create()->id,
        'confirmation_number' => (new RandomPurchaseConfirmationNumberGenerator)->generate(),
        'purchase_date' => Carbon::now(),
        'credit_card_id' => factory(CreditCard::class)->create()->id,
        'stripe_charge_id' => '',
    ];
});

$factory->define(PurchaseItem::class,function(Faker $faker){
	$pass = factory(Pass::class)->create()->id;
	return [
		'purchase_id' => factory(Purchase::class)->create()->id,
		'pass_id' => $pass->id,
		'description' => $pass->name,
		'qty' => 1,
		'price' => $pass->price,
	];

});

