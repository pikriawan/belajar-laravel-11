<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customUser = User::create([
            'name' => 'Fikri Setiawan',
            'username' => 'fikrisetiawan',
            'email' => 'fikrisetiawan2006@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('supersecret'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(4)->create();
    }
}
