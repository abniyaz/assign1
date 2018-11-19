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

        $response->assertStatus(302);
    }
    public function testLogout()
    {
        //make sure user logged in before login out
        $response = $this->get('/logout');

        $response->assertStatus(405);
    }
    public function testRequestserviceview()
    {
        //requestview link
        $response = $this->get('/requestserviceview');

        $response->assertStatus(302);
    }
    public function testPostService()
    {
        //requestview link
        $response = $this->post('submitservice');

        $response->assertStatus(302);
    }
    public function testSubmitreview()
    {
        //requestview link
        $response = $this->post('submitreview');

        $response->assertStatus(302);
    }
    public function testAcceptrequest()
    {
        //requestview link
        $response = $this->get('acceptrequest');

        $response->assertStatus(302);
    }
    public function testSubmitrequest()
    {
        //requestview link
        $response = $this->post('submitrequest');

        $response->assertStatus(302);
    }
}
