<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Category::create([
            'category_name' => 'News',
        ]);

        User::create([
            'name' => 'Gilbert Justian',
            'email' => 'gilbert@email.com',
            'password' => Hash::make('123'),
        ]);
    }
}
