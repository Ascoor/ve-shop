<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية من Faker

        // إنشاء 28 براند وإضافة صورة لكل براند
        Brand::factory()->count(28)->create()->each(function ($brand) use ($faker) {
            // إضافة صورة للبراند باستخدام العلاقة متعددة الأشكال
            Image::create([
                'path' => $faker->imageUrl(640, 480, 'business', true, 'brand'), // توليد URL للصورة
                'imageable_id' => $brand->id, // ربط الصورة بالبراند
                'imageable_type' => Brand::class, // تحديد النوع كـ Brand
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
