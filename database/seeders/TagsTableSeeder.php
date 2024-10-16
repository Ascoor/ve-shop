<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية

        // قائمة وسوم عشوائية باللغة العربية
        $tags = [
            'تقنية',
            'موضة',
            'منزل',
            'رياضة',
            'أجهزة ذكية',
            'سفر',
            'صحة',
            'جمال',
            'ملابس',
            'أطعمة',
            'ألعاب',
            'كتب',
            'إلكترونيات',
            'موسيقى',
            'سينما',
            'سيارات',
            'حيوانات أليفة',
            'مجوهرات',
            'هواتف',
            'ديكور'
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
