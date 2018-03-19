<?php

namespace App\Billing;

use App\Billing\PaymentFailedException;
use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Error\InvalidRequest;

/**
* 
*/
class StripePaymentGateway implements PaymentGateway
{
	private $apiKey;

	public function __construct()
	{
		// $this->apiKey = $apiKey;
		$this->apiKey = config('services.stripe.secret');
	}

	public function charge($amount,$token)
	{
		try{
			return Charge::create([
				'amount' => $amount,
				'source' => $token,
				'currency' => 'usd'
			],['api_key' => $this->apiKey]);

		} catch(\Exception $e){
			// dd($e);
			// return $e;
			throw new PaymentFailedException;
		}	
	}

	public function getValidToken($input)
	{
		return \Stripe\Token::create([
		  "card" => $input
		],['api_key' => $this->apiKey])->id;		
	}

	public function newChargesDuring($callback)
	{
		$latestCharge = $this->lastCharge();
		$callback($this);
		return $this->newChargesSince($latestCharge)->pluck('amount');

	}

	private function newChargesSince($charge = null)
	{
		$newCharges =  \Stripe\Charge::all(
	    	[
	    		'ending_before' => $charge ? $charge->id : null,
	    	],
	    	['api_key' => $this->apiKey]
	    )['data'];	

	    return collect($newCharges);	
	}

	private function lastCharge()
	{
	    return array_first(\Stripe\Charge::all(
	    	['limit' => 1],
	    	['api_key' => $this->apiKey]
	    )['data']);		
	}


	public function getValidTestToken()
	{
		return \Stripe\Token::create([
		  "card" => [
		    "number" => "4242424242424242",
		    "exp_month" => 1,
		    "exp_year" => Carbon::now()->addYears(2)->year,
		    "cvc" => "314"
		  ]
		],['api_key' => $this->apiKey])->id;			
	}
}