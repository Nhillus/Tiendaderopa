<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeModuleTest extends TestCase
{
    /**
     * Una prueba basica para comprobar que el home a cargado correctamente
     *
     * @test
     */
    
     function it_load_home_page()
    {
        $response = $this->get('/') 
                    ->assertStatus(200)
                    ->assertSee('Lebuya');
    }
    
   
    /**
     * Una prueba basica para comprobar que la pagina registro a cargado correctamente
     * en el futuro creare una prueba propia para estas paginas.
     *
     * @test
     */
     function it_load_register_page()
    {

        $response = $this->get('register')
                    ->assertStatus(200)
                    ->assertSee('register');
    }
}
