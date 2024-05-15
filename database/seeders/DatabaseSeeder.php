<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users using the factory
        \App\Models\User::factory(10)->create();

        // Call the seeders
        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
            CartSeeder::class
        ]);
        \App\Models\User::create([
            'name' => 'Gregorius Agung',
            'email' => 'agunggregorius845@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'role' => 'user',
            'current_team_id' => null,
        ]);

        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'role' => 'admin',
            'current_team_id' => null,
        ]);
    }
}