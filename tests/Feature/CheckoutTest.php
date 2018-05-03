<?php

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentGateway;
use App\Billing\StripePaymentGateway;
use App\Destination;
use App\Pass;
use App\PromoCode;
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
    function user_can_view_form_to_create_password()
    {
		$this->disableExceptionHandling();	
        $user = factory(User::class)->create(['password' => '']);
		$response = $this->withSession(['user' => $user])->get('/checkout/register');
        // $data = json_decode($response->getContent(),true);
        // dd($response->getContent());  
		$response->assertStatus(200);        
    }

    /** @test */
    function unregistered_user_cannot_view_form_to_create_password()
    {
        // $this->disableExceptionHandling();  
        $user = factory(User::class)->create(['password' => '']);
        $response = $this->get('/checkout/register');
        $response->assertStatus(404);          
    }

    /** @test */
    function user_can_register_a_password_after_purchase_of_pass()
    {
		$this->disableExceptionHandling();
        $faker  = Faker\Factory::create();
        $user = factory(User::class)->create(['password' => '']);	
		// $pass = factory(Pass::class)->create();	
  //       $destination = factory(Destination::class)->create();
  //       $pass->destinations()->attach($destination->id);
  //       $paymentGateway = new FakePaymentGateway;
        // Use this for the Payment Gateway
        // $this->app->instance(PaymentGateway::class,$paymentGateway);
		$password = $faker->password;

		$response = $this->post('/checkout/register',[
			'user_id' => $user->id,
            'password' => $password,
			'confirmPassword' => $password,
		]);   
        $newUser = $user->fresh();
        $this->assertNotEquals('',$newUser->password);
		$response->assertStatus(302);  
		// $response->assertViewHas('user');
		// $response->assertViewHas('pass');   
    }

    /** @test */
    function user_can_view_form_to_purchase_pass()
    {
        $this->disableExceptionHandling();
        $faker  = Faker\Factory::create();        
        $pass = factory(Pass::class)->create(['price' => '2000']);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
        $response = $this->get('/checkout/payment?pass_id='.$pass->id);

        $response->assertViewHas('pass');
        $response->assertViewHas('promoCodes');
        $response->assertStatus(200);
    }

    /** @test */
    function user_can_purchase_a_pass()
    {
		$this->disableExceptionHandling();
		$faker  = Faker\Factory::create();
		// $user = factory(User::class)->create();
        // $paymentGateway = new FakePaymentGateway;
        $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);
        // Create a Pass
        $pass = factory(Pass::class)->create(['price' => '2000']);	
        $promo = factory(PromoCode::class)->create();

        // Stubb out the PurchaseConfirmationNumberGenerator
        $purchaseConfirmationNumberGenerator = Mockery::mock(PurchaseConfirmationNumberGenerator::class,[
            'generate' => 'CONFIRMATION1234',
        ]); 
        $this->app->instance(PurchaseConfirmationNumberGenerator::class,$purchaseConfirmationNumberGenerator);
        $email = $faker->email;
        // Purchase a Pass
        $response = $this->post('/checkout/payment',[
        	'name' => $faker->firstName . " " . $faker->lastName,
            'email' => $email,
            'phone' => $faker->phoneNumber,
            'pass_id' => $pass->id,
            'promo' => $promo->code,
        	'qty' => 1,
        	'number' => '4242424242424242',
        	'expiry' => '04 / '.substr(Carbon::now()->addYears(3)->year,2),
        	'cvc' => '123',
        	'zipcode' => $faker->postcode,
        ]);
        // dd($response);
        $response->assertStatus(302);
        // $response->assertSessionHas('user');
        // Assert that Purchase was created
        // dd($pass);
        $purchase = $pass->purchases()->whereHas('user',function($q) use ($email) {
            $q->where('email',$email);
        })->first();
        // dd(User::where('email',$email)->first()->purchases);
        $this->assertNotNull($purchase);
        $this->assertNotNull($purchase->stripe_charge_id);
        $this->assertEquals('CONFIRMATION1234',$purchase->confirmation_number);
        // Verify the Total of the Purchase
        $this->assertEquals(2, $purchase->items->sum('qty'));
        $this->assertEquals(1*$pass->price-$promo->discount, $purchase->total);

    }

    /** @test */
    function purchase_is_not_created_if_payment_failed()
    {
		$this->disableExceptionHandling();
		$faker  = Faker\Factory::create();
		// $user = factory(User::class)->create();        
        $paymentGateway = new FakePaymentGateway;
        // $paymentGateway = new StripePaymentGateway(config('services.stripe.secret'));
        // Use this for the Payment Gateway
        $this->app->instance(PaymentGateway::class,$paymentGateway);

        $pass = factory(Pass::class)->create(['price' => '2000']);	
        $email = $faker->email;
        $response = $this->post('/checkout/payment',[
            'name' => $faker->firstName . " " . $faker->lastName,
            'email' => $email,
            'phone' => $faker->phoneNumber,
        	'pass_id' => $pass->id,
        	'qty' => 1,
        	'number' => '4000000000000002',
        	'expiry' => '04 / '.substr(Carbon::now()->addYears(3)->year,2),
        	'cvc' => '123',
        	'zipcode' => $faker->postcode,
        	'token' => 'invalid-token'
        ], ['HTTP_REFERER' => '/checkout/payment']);

        $response->assertStatus(302);
        $response->assertSessionHas('error','Oops, this credit card payment failed. ');
        $response->assertRedirect('/checkout/payment');

    }
}