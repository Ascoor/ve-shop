<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();

        User::create([
            'name' => 'Demo Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Demo Vendor',
            'email' => 'vendor@demo.com',
            'password' => Hash::make('password'),
            'role' => 'vendor',
        ]);

        User::create([
            'name' => 'Demo Customer',
            'email' => 'customer@demo.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);
    }
}
