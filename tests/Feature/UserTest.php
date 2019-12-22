<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserGet()
    {
        $response = $this->get('/users');

        $response->dump();
    }

    public function testGetUserId()
    {
        $id = 5;

        $response = $this->get('/users/5');

        $response->dump();
    }
}
