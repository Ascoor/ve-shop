<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image; // إضافة استخدام نموذج Image
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete(); // حذف كل البيانات من جدول المستخدمين
        $users = [
            [
                'id' => 1,
                'name' => 'كامل أبوليلة',
                'email' => 'admin@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'سعد العتيبي',
                'email' => 'emp1@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'مها العتيبي',
                'email' => 'user1@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 3,
            ],
        ];

        foreach ($users as $user) {
            $userId = User::insertGetId($user); // إدراج المستخدم والحصول على معرفه

            // إضافة صورة للمستخدم باستخدام العلاقة متعددة الأشكال
            Image::create([
                'path' => "/assets/users/user-{$userId}.png", // تحديد المسار للصورة
                'imageable_id' => $userId, // ربط الصورة بالمستخدم
                'imageable_type' => User::class, // تحديد النوع كـ User
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
