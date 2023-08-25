<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(25)->create();
        User::create([
            'name' => 'yanta',
            'email' => 'capah.maga@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '08123456789',
            'bio' => 'lazy programmer',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '08123456789',
            'bio' => 'Superadmin',
            'password' => Hash::make('password'),
        ]);
    }
}
