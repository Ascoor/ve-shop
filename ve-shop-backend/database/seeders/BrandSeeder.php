<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        Brand::truncate();

        Brand::create([
            'slug' => Str::slug('Acme'),
            'name_en' => 'Acme',
            'name_ar' => 'اكمي',
            'logo' => null,
        ]);
    }
}
