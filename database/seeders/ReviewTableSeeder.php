<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        DB::table('reviews')->delete(); // حذف كل البيانات من جدول المستودعات
        $faker = Faker::create('ar_SA'); // استخدام مكتبة Faker باللغة العربية
        $products = DB::table('products')->pluck('id'); // جلب معرفات المنتجات من جدول products
        $users = DB::table('users')->pluck('id'); // جلب معرفات المستخدمين من جدول users

        // توليد 50 مراجعة (Review)
        for ($i = 0; $i < 50; $i++) {
            // إنشاء مراجعة
            $reviewId = DB::table('reviews')->insertGetId([
                'product_id' => $faker->randomElement($products), // اختيار منتج عشوائي
                'user_id' => $faker->randomElement($users), // اختيار مستخدم عشوائي
                'comment' => $faker->sentence, // توليد تعليق عشوائي
                'rating' => $faker->numberBetween(1, 5), // تقييم من 1 إلى 5
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // ربط المراجعة بالمنتج في جدول product_reviews
            DB::table('product_reviews')->insert([
                'review_id' => $reviewId,
                'product_id' => $faker->randomElement($products), // ربط المراجعة بمنتج عشوائي
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}