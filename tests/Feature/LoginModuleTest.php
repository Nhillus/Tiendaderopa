<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginModuleTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
     /**
     * Una prueba basica para comprobar que el login a cargado correctamente
     * 
     * @test
     */

    function it_load_login_page()
    {
        $response = $this->get('login')
                    ->assertStatus(200)
                    ->assertSee('login');
    
    }

     /**
     * Una prueba basica para comprobar que el usuario logeado no pueda ver el login
     *
     * @test
     */

    function the_user_cannot_see_the_login_page()
    {
       
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/home');
    }


}
