<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية
        $users = DB::table('users')->pluck('id'); // جلب معرفات المستخدمين
        $products = DB::table('products')->pluck('id'); // جلب معرفات المنتجات

        // توليد 20 طلب (Order)
        for ($i = 0; $i < 20; $i++) {
            $orderId = DB::table('orders')->insertGetId([
                'user_id' => $faker->randomElement($users), // اختيار مستخدم عشوائي
                'total_amount' => $faker->randomFloat(2, 100, 1000), // توليد مبلغ عشوائي
                'status' => $faker->randomElement(['قيد المعالجة', 'تم الشحن', 'تم التوصيل', 'ملغى']), // حالة الطلب
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // لكل طلب، إنشاء عدد عشوائي من عناصر الطلب (من 1 إلى 5 منتجات)
            $numberOfItems = $faker->numberBetween(1, 5);

            for ($j = 0; $j < $numberOfItems; $j++) {
                $productId = $faker->randomElement($products);
                $quantity = $faker->numberBetween(1, 5);
                $price = DB::table('products')->where('id', $productId)->value('price'); // سعر المنتج

                DB::table('order_items')->insert([
                    'order_id' => $orderId,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'price' => $price, // السعر عند الطلب
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
