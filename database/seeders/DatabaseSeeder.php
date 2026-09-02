<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Categories
        $categories = [
            ['name' => 'Web Development'],
            ['name' => 'Data Science'],
            ['name' => 'Design & UI/UX'],
            ['name' => 'Mobile Development'],
            ['name' => 'Networking & Security'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }

        // 2. Seed Admin User
        User::firstOrCreate(
            ['email' => 'admin@perpus.test'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'isadmin' => true,
            ]
        );

        // 3. Seed Regular User
        User::firstOrCreate(
            ['email' => 'user@perpus.test'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password'),
                'isadmin' => false,
            ]
        );
    }
}
