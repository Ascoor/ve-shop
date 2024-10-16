<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // قائمة بأسماء أقسام المتجر بالعربية
        $categories = [
           'الإلكترونيات',
           'الأزياء',
           'الأجهزة المنزلية',
           'الرياضة',
           'المطبخ',
           'الجمال والعناية',
           'الأطفال والرضع',
           'الكتب',
           'السيارات',
           'الأثاث',
           'الألعاب والهوايات',
           'مستلزمات الحيوانات الأليفة',
           'الأدوات والمعدات الصناعية',
           'العناية الصحية والشخصية',
           'السفر والحقائب',
           'الدراجات النارية والإكسسوارات',
           'الموسيقى والآلات الموسيقية',
           'الأدوات المدرسية والمكتبية',
           'أدوات الإضاءة',
           'المنتجات الزراعية والحدائق',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($categories),
        ];
    }
}
