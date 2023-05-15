<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use App\Models\User;
use App\Models\History;
use App\Models\Category;
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


        // History::create([
        //     'user_id'=>1,
        //     'menu_id'=>1,
        // ]);

        // History::create([
        //     'user_id'=>1,
        //     'menu_id'=>2,
        // ]);

        // History::create([
        //     'user_id'=>2,
        //     'menu_id'=>2,
        // ]);

        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            CategorySeeder::class
        ]);
    }
}
