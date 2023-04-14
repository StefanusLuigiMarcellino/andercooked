<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'123',
            'username'=>'adminganteng',
            'profile_picture'=>'admin.jpg',
            'total_calories'=>12,
            'total_carbohydrates'=>10,
            'total_protein'=>100,
            'total_fat'=>1
        ]);
    }
}
