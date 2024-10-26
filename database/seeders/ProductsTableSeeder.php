<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // حذف الصور المرتبطة فقط بالمنتجات من جدول الصور
        DB::table('images')->where('imageable_type', 'App\Models\Product')->delete();

        // حذف كل المنتجات من جدول المنتجات
        DB::table('products')->delete();

        $faker = Faker::create('ar_SA'); // استخدام اللغة العربية من Faker
        $brands = DB::table('brands')->pluck('id'); // افتراض أن جدول العلامات التجارية موجود
        $categories = DB::table('categories')->pluck('id'); // افتراض أن جدول التصنيفات موجود

        $productNames = [
            'هاتف ذكي', 'جهاز كمبيوتر محمول', 'سماعات لاسلكية', 'تلفاز ذكي', 'غسالة ملابس',
            'ثلاجة', 'مايكروويف', 'كاميرا رقمية', 'ساعة ذكية', 'طابعة ليزر',
            'مكيف هواء', 'خلاط كهربائي', 'مكنسة كهربائية', 'لوح تزلج', 'دراجة هوائية',
            'جهاز عرض (بروجكتور)', 'ماكينة قهوة', 'فرن كهربائي', 'ميكروفون احترافي', 'سماعات رأس للألعاب',
            'سخان مياه', 'مقلاة هوائية', 'جهاز تعقيم', 'جهاز تدليك', 'مصفف شعر',
            'محمصة خبز', 'ميزان مطبخ', 'فرشاة أسنان كهربائية', 'غسالة أطباق', 'عصارة فواكه',
            'كشاف يدوي', 'لوحة مفاتيح ميكانيكية', 'ماوس لاسلكي', 'شاشة كمبيوتر', 'مكبر صوت بلوتوث',
            'كاميرا مراقبة', 'جهاز إنذار أمني', 'خيمة تخييم', 'شواية كهربائية', 'طاولة كي الملابس',
            'آلة صنع الوافل', 'آلة صنع الثلج', 'قلاية كهربائية', 'جهاز تصفية الهواء', 'ساعة حائط رقمية',
            'مروحة سقف', 'جهاز ضغط الدم', 'مجفف شعر', 'مصفف لحية', 'عربة أطفال', 'كرسي مساج', 'سكوتر كهربائي',
        ];

        for ($i = 0; $i < count($productNames); $i++) {
            // Create a product
            $productId = DB::table('products')->insertGetId([
                'name' => $productNames[$i], // استخدام أسماء المنتجات بالعربية
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 50, 1000), // Random price between 50 and 1000
                'category_id' => $faker->randomElement($categories), // Random category
                'brand_id' => $faker->randomElement($brands), // Random brand
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Add a related image for the product
            DB::table('images')->insert([
                'path' => $faker->imageUrl(640, 480, 'technics', true, 'product'), // Generates a product-related image URL
                'imageable_id' => $productId,
                'imageable_type' => 'App\Models\Product',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
