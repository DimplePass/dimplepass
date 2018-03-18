<?php

use App\Destination;
use App\Discount;
use App\Image;
use App\Pass;
use App\Vendor;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PassTest extends TestCase
{
    /** @test */
    function visitor_can_view_a_pass()
    {
		$this->disableExceptionHandling();
		$pass = factory(Pass::class)->create();
		$images = $pass->images()->save(factory(Image::class)->create());
		$destinations = $pass->destinations()->save(factory(Destination::class)->create());
		$discounts = factory(Discount::class,25)->create([
			'pass_id' => $pass->id
		])->each(function($d){
			$d->images()->saveMany(factory(Image::class,5)->create());
            $d->vendor_id = factory(Vendor::class)->create()->id;
            $d->save();
		});
		// dd($pass->images);
		// dd($pass->load('destinations','discounts.images'));
		// dd($discounts->load('vendor'));
		// dd($pass);
		$response = $this->get('/passes/'.$pass->slug);

		$response->assertStatus(200);
		$response->assertViewHas('pass');
		$response->assertViewHas('activePasses');

    }

    /** @test */
    function can_view_pass_price_in_dollars()
    {
		$this->disableExceptionHandling();
		$pass = factory(Pass::class)->create();

		$this->assertEquals($pass->price/100, $pass->price_in_dollars);        
    }
}