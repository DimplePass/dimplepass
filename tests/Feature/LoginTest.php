<?php

namespace Feature;

use App\Property;
use App\PropertySetting;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LoginTest extends TestCase
{
    

    /** @test */
    public function cannot_access_member_page_without_login()
    {

        $response = $this->get('/member');
        // $data = json_decode($response->getContent(),true);
        // dd($data);        
        $response->assertStatus(302);
        $response->assertRedirect('/login');        
    }



    /** @test */
    public function user_can_view_login()
    {
        $response = $this->get('/login');
        $response->assertSee('Login');
    }

    /** @test */
    public function valid_user_can_login()
    {
        // $this->disableExceptionHandling();
        // $this->seed('DatabaseSeeder');
        $user = factory(User::class)->create();
        // $user = User::find(1);
        $response = $this->post('/login',[
                'email' => $user->email,
                'password' => $user->password
            ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');

    }

    /** @test */
    function invalid_user_cannot_login()
    {
        $user = factory(User::class)->make();
        
        $response = $this->post('/login',[
                'email' => $user->email,
                'password' => \Hash::make($user->password)
            ]);
        // dd($this->app['session.store']);
        // dd($response->getContent());
        // $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email','These credentials do not match our records.');
    }

    /** @test */
    public function logged_in_user_can_view_member_page()
    {
        // $this->seed('DatabaseSeeder');
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/member/'.$user->id);

        $response->assertStatus(200);
        $response->assertViewHas(\Auth::user(),function() use ($user){
            return \Auth::user()->id === $user->id;
        });

        
    }

    /** @test */
    public function user_can_logout()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertStatus(302);
        $response->assertRedirect('/');

    }

}
