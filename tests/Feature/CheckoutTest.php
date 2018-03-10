<?php

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentGateway;
use App\Pass;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class CheckoutTest extends TestCase
{
    /** @test */
    function user_can_view_form_to_create_profile()
    {
		$this->disableExceptionHandling();	
		$pass = factory(Pass::class)->create();	

		$response = $this->get('/checkout/register?pass_id='.$pass->id);

		$response->assertStatus(200);
		$response->assertViewHas('pass');	        
    }

    /** @test */
    function user_can_register_before_purchase_of_pass()
    {
		$this->disableExceptionHandling();
        $faker  = Faker\Factory::create();	
		$pass = factory(Pass::class)->create();	

		$password = $faker->password;

		$response = $this->post('/checkout/register',[
			'pass_id' => $pass->id,
			'firstname' => $faker->firstname,
			'lastname' => $faker->lastname,
			'email' => $faker->email,
			'phone' => $faker->phoneNumber,
			'password' => $password,
			'confirmPassword' => $password,
		]);   

		$response->assertStatus(200);  
		$response->assertViewHas('user');
		$response->assertViewHas('pass');   
    }

    /** @test */
    function user_can_purchase_a_pass()
    {
		$this->disableExceptionHandling();
		$faker  = Faker\Factory::create();
		$user = factory(User::class)->create();

        // Create a Pass
        $pass = factory(Pass::class)->create(['price' => '2000']);	

        // Purchase a Pass
        $response = $this->actingAs($user)->post('/checkout/payment',[
        	'pass_id' => $pass->id,
        	'qty' => 1,
        	'number' => '4242424242424242',
        	'expiry' => '04 / '.Carbon::now()->addYears(3),
        	'cvc' => '123',
        	'name' => $faker->firstName . " " . $faker->lastName,
        	'zipcode' => $faker->postcode,
        ]);

        $response->assertStatus(201);

        // Assert that Purchase was created
        // dd($pass->purchases);
        $purchase = $pass->purchases()->where('user_id',$user->id)->first();
        $this->assertNotNull($purchase);
        // Verify the Total of the Purchase
        $this->assertEquals(1, $purchase->items->sum('qty'));
        $this->assertEquals(1*$pass->price, $purchase->total);

    }

    /** @test */
    function purchase_is_not_created_if_payment_failed()
    {
		$this->disableExceptionHandling();
		$faker  = Faker\Factory::create();
		$user = factory(User::class)->create();        
        $pass = factory(Pass::class)->create(['price' => '2000']);	

        $response = $this->actingAs($user)->post('/checkout/payment',[
        	'pass_id' => $pass->id,
        	'qty' => 1,
        	'number' => '4242424242424242',
        	'expiry' => '04 / '.Carbon::now()->addYears(3),
        	'cvc' => '123',
        	'name' => $faker->firstName . " " . $faker->lastName,
        	'zipcode' => $faker->postcode,
        ]);

        $response->assertStatus(422);

    }
}