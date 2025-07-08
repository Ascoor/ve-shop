<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

it('allows login as demo user', function () {
    config(['app.demo' => true]);

    $user = User::create([
        'name' => 'Demo Admin',
        'email' => 'admin@test.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);

    $response = $this->post('/demo-login/admin');
    $response->assertRedirect('/');
});
