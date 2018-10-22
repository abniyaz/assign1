<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * unit testing.
     *
     * @return void
     */
    //Testing home url
    public function testHomePublic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testAuth()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testHome()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function testLogout()
    {
        //make sure user logged in before login out
        $response = $this->get('/logout');

        $response->assertStatus(405);
    }
}
