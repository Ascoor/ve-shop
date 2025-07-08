<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::truncate();

        $root = Category::create([
            'slug' => Str::slug('Electronics'),
            'name_en' => 'Electronics',
            'name_ar' => 'إلكترونيات',
            'description_en' => 'Electronic devices',
            'description_ar' => 'أجهزة إلكترونية',
        ]);

        Category::create([
            'parent_id' => $root->id,
            'slug' => Str::slug('Mobile Phones'),
            'name_en' => 'Mobile Phones',
            'name_ar' => 'هواتف محمولة',
            'description_en' => 'Smartphones and accessories',
            'description_ar' => 'هواتف ذكية واكسسوارات',
        ]);
    }
}
