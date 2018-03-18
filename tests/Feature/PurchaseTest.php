<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PurchaseTest extends TestCase
{
    /** @test */
    function user_can_view_a_purchase()
    {
        
    }

    /** @test */
    function can_view_purchase_amounts_in_dollars()
    {
		$this->disableExceptionHandling();
		$pass = factory(Pass::class)->create();        
    }
}