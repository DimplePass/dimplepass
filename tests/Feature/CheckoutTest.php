<?php

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentGateway;
use App\Billing\StripePaymentGateway;
use App\Destination;
use App\Pass;
use App\PurchaseConfirmationNumberGenerator;
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
        $destination = factory(Destination::class)->create();
        $pass->destinations()->attach($destination->id);
        $paymentGateway = new FakePaymentGateway;
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);
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
        $destination = factory(Destination::class)->create();
        $pass->destinations()->attach($destination->id);
        $paymentGateway = new FakePaymentGateway;
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);
		$password = $faker->password;
        $email = $faker->email;

		$response = $this->post('/checkout/register',[
			'pass_id' => $pass->id,
			'firstname' => $faker->firstname,
			'lastname' => $faker->lastname,
			'email' => $email,
			'phone' => $faker->phoneNumber,
			'password' => $password,
			'confirmPassword' => $password,
		]);   
        $newUser = User::where('email',$email)->first();
        $this->assertEquals($newUser->id,\Auth::user()->id);
		$response->assertStatus(302);  
		// $response->assertViewHas('user');
		// $response->assertViewHas('pass');   
    }

    /** @test */
    function user_can_purchase_a_pass()
    {
		$this->disableExceptionHandling();
		$faker  = Faker\Factory::create();
		$user = factory(User::class)->create();
        // $paymentGateway = new FakePaymentGateway;
        $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);
        // Create a Pass
        $pass = factory(Pass::class)->create(['price' => '2000']);	

        // Stubb out the PurchaseConfirmationNumberGenerator
        $purchaseConfirmationNumberGenerator = Mockery::mock(PurchaseConfirmationNumberGenerator::class,[
            'generate' => 'CONFIRMATION1234',
        ]); 
        $this->app->instance(PurchaseConfirmationNumberGenerator::class,$purchaseConfirmationNumberGenerator);

        // Purchase a Pass
        $response = $this->actingAs($user)->post('/checkout/payment',[
        	'pass_id' => $pass->id,
        	'qty' => 1,
        	'number' => '4242424242424242',
        	'expiry' => '04 / '.substr(Carbon::now()->addYears(3)->year,2),
        	'cvc' => '123',
        	'name' => $faker->firstName . " " . $faker->lastName,
        	'zipcode' => $faker->postcode,
        ]);

        $response->assertStatus(302);

        // Assert that Purchase was created
        // dd($pass->purchases);
        $purchase = $pass->purchases()->where('user_id',$user->id)->first();
        $this->assertNotNull($purchase);
        $this->assertNotNull($purchase->stripe_charge_id);
        $this->assertEquals('CONFIRMATION1234',$purchase->confirmation_number);
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
        $paymentGateway = new FakePaymentGateway;
        // $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);

        $pass = factory(Pass::class)->create(['price' => '2000']);	

        $response = $this->actingAs($user)->post('/checkout/payment',[
        	'pass_id' => $pass->id,
        	'qty' => 1,
        	'number' => '4000000000000002',
        	'expiry' => '04 / '.substr(Carbon::now()->addYears(3)->year,2),
        	'cvc' => '123',
        	'name' => $faker->firstName . " " . $faker->lastName,
        	'zipcode' => $faker->postcode,
        	'token' => 'invalid-token'
        ], ['HTTP_REFERER' => '/checkout/payment']);

        $response->assertStatus(302);
        $response->assertSessionHas('error','Oops, this credit card payment failed. ');
        $response->assertRedirect('/checkout/payment');

    }
}