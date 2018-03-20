<?php

use App\Pass;
use App\Purchase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    function user_can_view_profile()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/member/'.$user->id);
        $response->assertStatus(200);
        $response->assertViewHas(\Auth::user(),function() use ($user){
            return \Auth::user()->id === $user->id;
        });        
        
    }

    /** @test */
    public function user_cannot_view_another_member_page()
    {
        // $this->seed('DatabaseSeeder');
        $user = factory(User::class)->create();
        $userTwo = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/member/'.$userTwo->id . "/edit");

        $response->assertStatus(302);
        $response->assertRedirect('/member/'.$user->id);

        
    }

    /** @test */
    function user_can_view_form_to_edit_profile()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/member/'.$user->id.'/edit');
        $response->assertStatus(200);
        $response->assertViewHas(\Auth::user(),function() use ($user){
            return \Auth::user()->id === $user->id;
        });         
    }

    /** @test */
    function user_can_update_profile()
    {
        $this->disableExceptionHandling();
        $user = factory(User::class)->create();
        $faker  = Faker\Factory::create();
        $password = $faker->password;

        $response = $this->actingAs($user)->put('/member/'.$user->id,[
        	'firstname' => $faker->firstname,
        	'lastname' => $faker->lastname,
        	'email' => $faker->email,
        	'password' => $password,
            'confirmPassword' => $password,
        ]);        

        // $data = json_decode($response->getContent(),true);
        // dd($data);  
        $response->assertStatus(302);
        $this->assertNotEquals($user->email,$user->fresh()->email);
        $this->assertNotEquals($user->password,$user->fresh()->password);

    }

    /** @test */
    function user_can_view_purchased_passes()
    {
        $this->disableExceptionHandling();
        $user = factory(User::class)->create();   
        $pass1 = factory(Pass::class)->create();
        $pass2 = factory(Pass::class)->create([
            'name' => 'Glacier',
            'slug' => 'glacier',
        ]);
        $pass3 = factory(Pass::class)->create([
            'name' => 'Grand Canyon',
            'slug' => 'grand-canyon',
        ]);
        $purchase = factory(Purchase::class)->create([
            'user_id' => $user->id,
        ]);        
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass1->id,
            'description' => $pass1->name,
            'qty' => 1,
            'price' => $pass1->price,            
        ]);
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass2->id,
            'description' => $pass2->name,
            'qty' => 1,
            'price' => $pass2->price,            
        ]);  
        $purchase->items()->create([
            'purchase_id' => $purchase->id,
            'pass_id' => $pass3->id,
            'description' => $pass3->name,
            'qty' => 1,
            'price' => $pass3->price,            
        ]);  
        // dd($purchase->items->pluck('pass'));
        // dd($user->passes);
        $this->assertEquals(3,$user->passes->count());
       

    }
}