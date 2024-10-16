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
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProductTagTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(StockTableSeeder::class);
        $this->call(WarehouseTableSeeder::class);

        $this->call(OrderTableSeeder::class);
        $this->call(PaymentTableSeeder::class);

        $this->call(ReviewTableSeeder::class);

        
        $this->call(RatingsTableSeeder::class);
    
        
       $this->call(CountriesTableSeeder::class);
       $this->call(StatesTableSeeder::class);
       $this->call(CitiesTableSeeder::class);
        // Automatically run the Passport install command after seeding
        Artisan::call('passport:install', ['--force' => true]);
        Artisan::call('optimize:clear');
        
        // Optionally, output the results of the Passport install to the console
        echo Artisan::output();
    }
}
