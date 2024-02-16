<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'john',
            'email' => 'john@outlook.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Experience::create([
            'points' => 50,
            'user_id' => 1,
        ]);

        \App\Models\Reservation::create([
            'name' => 'John',
            'date' => '16-02-2024',
            'time' => '16:15',
            'table' => 1,
            'user_id' => 1,
        ]);

        \App\Models\Reservation::create([
            'name' => 'Piet',
            'date' => '17-02-2024',
            'time' => '16:35',
            'table' => 2,
            'user_id' => 1,
        ]);
    }
}
