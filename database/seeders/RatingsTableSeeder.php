<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية لتوليد البيانات العشوائية
        $products = DB::table('products')->pluck('id'); // جلب معرفات المنتجات
        $users = DB::table('users')->pluck('id'); // جلب معرفات المستخدمين

        // توليد 100 تقييم عشوائي (Rating)
        for ($i = 0; $i < 100; $i++) {
            DB::table('ratings')->insert([
                'product_id' => $faker->randomElement($products), // ربط التقييم بمنتج عشوائي
                'user_id' => $faker->randomElement($users), // ربط التقييم بمستخدم عشوائي
                'score' => $faker->numberBetween(1, 5), // توليد تقييم من 1 إلى 5
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
