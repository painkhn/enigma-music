<?php

namespace Database\Seeders;

use App\Models\{User, Genre};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'oxxxymiron',
            'email' => 'oxxy@gmail.com',
            'password' => Hash::make('123123123')
        ]);

        Genre::factory()->create([
            'title' => 'Рок'
        ]);
        Genre::factory()->create([
            'title' => 'Рэп'
        ]);
        Genre::factory()->create([
            'title' => 'Блюз'
        ]);
    }
}
