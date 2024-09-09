<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('managements')->insert([
            [
                'Type' => 'Management 1',
                'name' => 'Management 1',
                'position' => 'English Teacher',
                'image' => 'asd.jpg',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Type' => 'Management 2',
                'name' => 'Management 2',
                'position' => 'Math Teacher',
                'image' => 'asd.jpg',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Type' => 'Management 3',
                'name' => 'Management 3',
                'position' => 'Sundanese Teacher',
                'image' => 'asd.jpg',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Type' => 'Management 4',
                'name' => 'Management 4',
                'position' => 'Anjai Teacher',
                'image' => 'asd.jpg',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
