<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // حذف البيانات القديمة من جدول warehouses و product_warehouse
        DB::table('product_warehouse')->delete(); // حذف كل البيانات من جدول الربط
        DB::table('warehouses')->delete(); // حذف كل البيانات من جدول المستودعات

        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية
        $products = DB::table('products')->pluck('id'); // الحصول على معرفات المنتجات من جدول products

        // توليد بيانات 10 مستودعات
        for ($i = 0; $i < 10; $i++) {
            $warehouseId = DB::table('warehouses')->insertGetId([
                'name' => 'مستودع ' . $faker->unique()->word, // توليد اسم مستودع عشوائي
                'location' => $faker->city, // توليد موقع عشوائي
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // ربط المستودع بعدد عشوائي من المنتجات
            $randomProducts = $products->random($faker->numberBetween(1, 5));
            foreach ($randomProducts as $productId) {
                DB::table('product_warehouse')->insert([
                    'product_id' => $productId,
                    'warehouse_id' => $warehouseId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
