<?php

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentFailedException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class FakePaymentGatewayTest extends TestCase
{
	use PaymentGatewayContractTests;


	protected function getPaymentGateway()
	{
		return new FakePaymentGateway;
	}






}