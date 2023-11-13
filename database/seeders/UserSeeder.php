<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        // Teacher User
        DB::table('users')->insert([
            'name' => 'Teacher User',
            'email' => 'teacher@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'teacher',
        ]);

        // Student User
        DB::table('users')->insert([
            'name' => 'Student User',
            'email' => 'student@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'student',
        ]);
    }
}
