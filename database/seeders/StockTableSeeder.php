<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // استخدام مكتبة Faker لتوليد بيانات عشوائية
        $products = DB::table('products')->pluck('id'); // الحصول على معرفات المنتجات من جدول products

        foreach ($products as $productId) {
            DB::table('stocks')->insert([
                'product_id' => $productId,
                'quantity' => $faker->numberBetween(10, 100), // توليد كمية عشوائية بين 10 و100
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
