<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'luka',
            'email' => 'luka@gmail.com',
            'password' => bcrypt('Password123'),
        ]);

        User::factory(5)->create();
    }
}
