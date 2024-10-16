<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية

        // إدخال طرق دفع ثابتة
        DB::table('payment_methods')->insert([
            ['method' => 'بطاقة ائتمان'],
            ['method' => 'باي بال'],
            ['method' => 'تحويل بنكي'],
            ['method' => 'نقدي'],
        ]);

        // الحصول على معرفات الطلبات من جدول orders
        $orders = DB::table('orders')->pluck('id');
        $paymentMethods = DB::table('payment_methods')->pluck('method');

        // توليد بيانات لجدول payments لكل طلب
        foreach ($orders as $orderId) {
            DB::table('payments')->insert([
                'order_id' => $orderId,
                'amount' => $faker->randomFloat(2, 100, 1000), // توليد مبلغ عشوائي بين 100 و 1000
                'payment_method' => $faker->randomElement($paymentMethods), // اختيار طريقة دفع عشوائية
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
