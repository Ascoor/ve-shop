<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Image;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية من Faker

        // إنشاء 20 فئة وإضافة صورة لكل فئة
        Category::factory()->count(20)->create()->each(function ($category) use ($faker) {
            // إضافة صورة للفئة باستخدام العلاقة متعددة الأشكال
            Image::create([
                'path' => $faker->imageUrl(640, 480, 'abstract', true, 'category'), // توليد URL للصورة
                'imageable_id' => $category->id, // ربط الصورة بالفئة
                'imageable_type' => Category::class, // تحديد النوع كـ Category
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
