<?php

namespace Database\Seeders;

use App\Models\User; 
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
 ders\CategorySeeder; 
 
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        if (config('app.demo')) {
            $this->call([
                DemoSeeder::class,
                BrandSeeder::class,
                ProductSeeder::class,
                CategorySeeder::class,
            ]);
 
            return;
        }

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); 

        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
 
    }
}
