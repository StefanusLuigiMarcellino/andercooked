<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'alis',
            'email'=>'alis@gmail.com',
            'password'=>'123',
            'username'=>'alis123',
            'profile_picture'=>'alis.jpg',
            'total_calories'=>12,
            'total_carbohydrates'=>10,
            'total_protein'=>100,
            'total_fat'=>10
        ]);

        Category::create([
            'category'=>'Foodies'
        ]);

        Category::create([
            'category'=>'Beverages'
        ]);

        Menu::create([
            'category_id'=>1,
            'user_id'=>1,
            'menu_name'=>'abc',
            "description"=>'blablabla',
            'published_at'=>'2022-02-12',
            'total_of_likes'=>12,
            'ingredients'=>'1,2,3,4',
            'cooking_steps'=>'step1,
step2',
            'calories'=>573,
            'carbohydrates'=>23,
            'protein'=>492,
            'fat'=>13,
            'menu_pics'=>'menu.jpg'
        ]);
    }
}
