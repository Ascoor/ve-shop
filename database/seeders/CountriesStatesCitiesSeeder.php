<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountriesStatesCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // مسح البيانات القديمة
        DB::table('countries')->delete();
        DB::table('states')->delete();
        DB::table('cities')->delete();

        // تحديد مسار مجلد البيانات
        $dataPath = base_path('vendor/rinvex/countries/resources/data/');

        // جلب جميع ملفات JSON في المجلد
        $files = File::allFiles($dataPath);

        foreach ($files as $file) {
            // قراءة محتوى كل ملف JSON
            $countryData = json_decode(File::get($file), true);

            // التحقق من وجود مفاتيح name و iso_3166_1_alpha2
            if (isset($countryData['name']['common'], $countryData['iso_3166_1_alpha2'])) {
                // إدخال بيانات الدولة في جدول countries
                $countryId = DB::table('countries')->insertGetId([
                    'name' => $countryData['name']['common'],
                    'code' => $countryData['iso_3166_1_alpha2'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // التحقق مما إذا كانت هناك مقاطعات (states) أو مدن (cities)
                if (isset($countryData['states']) && is_array($countryData['states'])) {
                    foreach ($countryData['states'] as $state) {
                        // التحقق من وجود مفتاح name في state
                        if (isset($state['name']) && !empty($state['name'])) {
                            $stateId = DB::table('states')->insertGetId([
                                'name' => $state['name'],
                                'country_id' => $countryId,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ]);

                            // إدخال بيانات المدن (cities) إن وجدت
                            if (isset($state['cities']) && is_array($state['cities'])) {
                                foreach ($state['cities'] as $city) {
                                    // التحقق من أن المدينة لديها اسم صالح وغير فارغ
                                    if (!empty($city)) {
                                        DB::table('cities')->insert([
                                            'name' => $city,
                                            'state_id' => $stateId,
                                            'created_at' => now(),
                                            'updated_at' => now(),
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                } else {
                    // إدخال العاصمة كمدينة إذا لم تكن هناك ولايات أو مدن أخرى
                    if (isset($countryData['capital']) && is_string($countryData['capital']) && !empty($countryData['capital'])) {
                        DB::table('cities')->insert([
                            'name' => $countryData['capital'],
                            'state_id' => null, // لا توجد مقاطعة، لذا تكون null
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }
        }
    }
}
