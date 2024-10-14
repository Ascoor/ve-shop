<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call(RolesTableSeeder::class);
        
        
        $this->call(UsersTableSeeder::class);
        
        
        // Automatically run the Passport install command after seeding
        Artisan::call('passport:install', ['--force' => true]);
        Artisan::call('optimize:clear');
        
        // Optionally, output the results of the Passport install to the console
        echo Artisan::output();
   }
}
