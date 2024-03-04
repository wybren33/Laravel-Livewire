<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create default user
        User::create([
            'name' => 'Default User',
            'email' => 'example@mboutrecht.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('Ult69iem'), // password
            'remember_token' => Str::random(10),
        ]);

        // Create 1000 random users
        User::factory()->count(1000)->create();
    }
}
