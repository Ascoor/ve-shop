<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // الحصول على كل معرفات المنتجات والوسوم
        $products = DB::table('products')->pluck('id');
        $tags = DB::table('tags')->pluck('id');

        foreach ($products as $productId) {
            // اختر عدد عشوائي من الوسوم لكل منتج
            $randomTags = $tags->random($faker->numberBetween(1, 5));

            foreach ($randomTags as $tagId) {
                DB::table('product_tag')->insert([
                    'product_id' => $productId,
                    'tag_id' => $tagId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
