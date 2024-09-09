<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'role' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Operator User',
                'role' => 'operator',
                'email' => 'operator@example.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
