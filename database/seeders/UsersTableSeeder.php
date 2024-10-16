<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('users')->delete(); // حذف كل البيانات من جدول المستودعات
        User::insert([
            [
                'id' => 1,
                'name' => 'كامل أبوليلة',
                'email' => 'admin@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 1
             
            ],
            [
                
                'id' => 2,
                'name' => 'سعد العتيبي',
                'email' => 'emp1@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 2
            ],
            [
                
                'id' => 3,
                'name' => 'مها العتيبي',
                'email' => 'user1@ve-shop.co',
                'password' => Hash::make('Askar@1984'),
                'role_id' => 3
            ]
        ]);
    }
}
