<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form(){
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register_form(){
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_user_duplication(){
        $user1 = User::make([
            'name' => 'Teszt Elek',
            'email' => 'tesztelek@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Proba Maria',
            'email' => 'probamaria@gmail.com'
        ]);

        $this->assertNotEquals($user1->email , $user2->email);
    }
}
