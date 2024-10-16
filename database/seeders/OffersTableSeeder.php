<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية من Faker
        $products = DB::table('products')->pluck('id'); // الحصول على معرفات المنتجات
        
        // توليد 20 عرض (Offer)
        for ($i = 0; $i < 20; $i++) {
            $offerId = DB::table('offers')->insertGetId([
                'title' => $faker->words(3, true), // توليد عنوان عشوائي باللغة العربية
                'description' => $faker->sentence, // توليد وصف عشوائي
                'discount_percentage' => $faker->randomFloat(2, 5, 50), // خصم من 5% إلى 50%
                'start_date' => $faker->dateTimeBetween('-1 month', '+1 month'), // تاريخ بدء عشوائي
                'end_date' => $faker->dateTimeBetween('+1 month', '+2 months'), // تاريخ انتهاء عشوائي
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // ربط العرض (Offer) بعدد عشوائي من المنتجات
            $randomProducts = $products->random($faker->numberBetween(1, 5));
            foreach ($randomProducts as $productId) {
                DB::table('product_offer')->insert([
                    'product_id' => $productId,
                    'offer_id' => $offerId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
