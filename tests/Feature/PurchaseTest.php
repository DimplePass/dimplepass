<?php

use App\Purchase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PurchaseTest extends TestCase
{
    // /** @test */
    // function user_can_view_a_purchase()
    // {
        
    // }

    /** @test */
    function can_view_purchase_amounts_in_dollars()
    {
		$this->disableExceptionHandling();
		$purchase = factory(Purchase::class)->create();        

        $this->assertEquals($purchase->total/100, $purchase->total_in_dollars);
    }
}