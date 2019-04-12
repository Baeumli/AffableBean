<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * 001 - Register a Super Admin
     *
     * @return void
     */
    public function testRegisterSuperAdmin()
    {
        $user = User::make([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password,
        ]);

        $response->assertStatus(302);
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'is_admin' => 2,
        ]);
    }

    /**
     * 003 - Register a valid user
     *
     * @return void
     */
    public function testRegisterValidUser()
    {
        $user = User::make([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password,
        ]);

        $response->assertStatus(302);
        $this->assertAuthenticated();
    }

    /**
     * 004 - Login a valid user
     *
     * @return void
     */
    public function testLoginValidUser()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret123'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret123'
        ]);

        $response->assertStatus(302);
        $this->assertAuthenticatedAs($user);
    }

    /**
     * 005 - Logout an authenticated user
     *
     * @return void
     */
    public function testLogout()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => 'secret123',
        ]);

        $response = $this->actingAs($user)->post('/logout');
        $response->assertStatus(302);
        $this->assertGuest();
    }

    /**
     * 003 - Register a valid user
     *
     * @return void
     */
    public function testRegisterInvalidUser()
    {
        $user = User::make([
            'name' => 'John Doe',
            'email' => 'john.doe_gmail.com',
            'password' => 'secret123',
        ]);

        $response = $this->post('register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password,
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /**
     * 004 - Login a user with invalid data
     *
     * @return void
     */
    public function testLoginInvalidUser()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret123'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret123456'
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
