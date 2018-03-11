<?php

namespace App\Billing;

use App\Billing\PaymentFailedException;
use Stripe\Charge;
use Stripe\Error\InvalidRequest;

/**
* 
*/
class StripePaymentGateway implements PaymentGateway
{
	private $apiKey;

	public function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}

	public function charge($amount,$token)
	{
		try{
			Charge::create([
				'amount' => $amount,
				'source' => $token,
				'currency' => 'usd'
			],['api_key' => $this->apiKey]);

		} catch(InvalidRequest $e){
			throw new PaymentFailedException;
		}	
	}

	public function getValidToken($input)
	{
		return \Stripe\Token::create([
		  "card" => $input
		],['api_key' => config('services.stripe.secret')])->id;		
	}
}