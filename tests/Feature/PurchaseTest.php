<?php

use App\Pass;
use App\Purchase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PurchaseTest extends TestCase
{
    /** @test */
    function user_can_view_a_purchase()
    {
        $this->disableExceptionHandling();
        $user = factory(User::class)->create();
        $pass = factory(Pass::class)->create();
        $purchase = factory(Purchase::class)->create([
            'user_id' => $user->id,
        ]);
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass->id,
            'description' => $pass->name,
            'qty' => 1,
            'price' => $pass->price,            
        ]);

        $response = $this->actingAs($user)->get('/purchases/'.$purchase->confirmation_number);

        $this->assertEquals(1,$user->purchases->count());
        $response->assertViewHas('purchase');


    }

    /** @test */
    function user_can_view_a_printable_purchase()
    {
        $this->disableExceptionHandling();
        $user = factory(User::class)->create();
        $pass = factory(Pass::class)->create();
        $purchase = factory(Purchase::class)->create([
            'user_id' => $user->id,
        ]);
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass->id,
            'description' => $pass->name,
            'qty' => 1,
            'price' => $pass->price,            
        ]);

        $response = $this->actingAs($user)->get('/purchases/'.$purchase->confirmation_number.'/print');

        $this->assertEquals(1,$user->purchases->count());
        $response->assertViewHas('purchase');


    }
    /** @test */
    function can_view_purchase_amounts_in_dollars()
    {
		$this->disableExceptionHandling();
        $pass = factory(Pass::class)->create();
		$purchase = factory(Purchase::class)->create();        
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass->id,
            'description' => $pass->name,
            'qty' => 1,
            'price' => $pass->price,            
        ]);
        $this->assertEquals($purchase->total/100, $purchase->total_in_dollars);
    }
}