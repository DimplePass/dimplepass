<?php

use App\Billing\PaymentFailedException;
use App\Billing\StripePaymentGateway;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class StripePaymentGatewayTest extends TestCase
{
	protected function setUp()
	{
		parent::setUp();
		$this->lastCharge = $this->lastCharge();
	}

	private function lastCharge()
	{
	    return array_first(\Stripe\Charge::all(
	    	['limit' => 1],
	    	['api_key' => config('services.stripe.secret')]
	    )['data']);		
	}

	private function newCharges()
	{
		return \Stripe\Charge::all(
	    	[
	    		'ending_before' => $this->lastCharge->id,
	    	],
	    	['api_key' => config('services.stripe.secret')]
	    )['data'];		
	}

	/** @test */
	function charges_with_a_valid_payment_token_are_successful()
	{
	    $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
	    $lastCharge = $this->lastCharge();

		$token = \Stripe\Token::create([
		  "card" => [
		    "number" => "4242424242424242",
		    "exp_month" => 1,
		    "exp_year" => Carbon::now()->addYears(2)->year,
		    "cvc" => "314"
		  ]
		],['api_key' => config('services.stripe.secret')])->id;	    

	    $paymentGateway->charge(2500,$token);

	    $this->assertCount(1,$this->newCharges());
	    $this->assertEquals(2500,$this->lastCharge()->amount);
	}    

	/** @test */
	function charges_with_invalid_payment_token_fail()
	{
		try {
		    $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
		    $paymentGateway->charge(2500,'invalid-token');			
		} catch(PaymentFailedException $e){
			$this->assertCount(0,$this->newCharges());
			return;
		}
		$this->fail('Charges with invalid token, did not fail!');
	}

	/** @test */
	function stripe_returns_valid_token()
	{
	    $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));

	    $token = $paymentGateway->getValidToken([
		    "number" => "4242424242424242",
		    "exp_month" => 1,
		    "exp_year" => Carbon::now()->addYears(2)->year,
		    "cvc" => "314"
	    ]);

	    $this->assertNotNull($token);
	}
}