<?php

use App\Pass;
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
}