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
            'name'=>'luigi',
            'email'=>'luigi@gmail.com',
            'password'=>'123',
            'username'=>'luigi123',
            'profile_picture'=>'luigi.jpg',
            'total_calories'=>12,
            'total_carbohydrates'=>10,
            'total_protein'=>100,
            'total_fat'=>1
        ]);
        DB::table('users')->insert([
            'name'=>'wili',
            'email'=>'wili@gmail.com',
            'password'=>'123',
            'username'=>'wili123',
            'profile_picture'=>'wili.jpg',
            'total_calories'=>12,
            'total_carbohydrates'=>10,
            'total_protein'=>100,
            'total_fat'=>1
        ]);
    }
}
