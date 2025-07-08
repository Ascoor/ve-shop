<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        Product::create([
            'name_en' => 'Sample Product',
            'name_ar' => 'منتج تجريبي',
            'description_en' => 'Demo product description',
            'description_ar' => 'وصف المنتج التجريبي',
            'price' => 10.99,
            'stock' => 50,
        ]);
    }
}
