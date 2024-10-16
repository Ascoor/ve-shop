<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OccasionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية

        // قائمة بالمناسبات الشهيرة باللغة العربية
        $occasionNames = [
            'عيد الفطر',
            'عيد الأضحى',
            'شهر رمضان',
            'اليوم الوطني',
            'رأس السنة الهجرية',
            'المولد النبوي الشريف',
            'عيد الأم',
            'عيد الحب',
            'يوم الأب',
            'عيد الميلاد',
            'عيد الزواج',
            'يوم الصداقة العالمي',
            'عيد العمال',
            'يوم المرأة العالمي',
            'يوم الطفل',
            'يوم البيئة العالمي',
            'اليوم العالمي للتطوع',
            'يوم الأرض',
            'يوم الصحة العالمي',
            'يوم العلم'
        ];

        foreach ($occasionNames as $name) {
            DB::table('occasions')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}