<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    
    public function testIndex()
    {
        $response = $this->json('GET', '/users');

        $response
            ->assertStatus(200)
            ->getStatusCode();
    }

    
 
    public function testShow()
    {
        $response = $this->json('GET', '/users/1');

        $response
            ->assertStatus(200)
            ->getStatusCode();
    }

    
}
