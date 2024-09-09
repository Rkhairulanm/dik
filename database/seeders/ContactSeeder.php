<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contactinfos')->insert([
            [
                'type' => 'full locations',
                'content' => 'Komplek Perum Nuansa Salam Jaya Blok No.10 Kp. Poponcol Des. Salamjaya kec.Pabuaran Kab. Subang Jawa Barat'
            ],
            [
                'type' => 'locations',
                'content' => 'Kab. Subang Jawa Barat'
            ],
            [
                'type' => 'phone',
                'content' => '(+62) 819 2533 337'
            ],
            [
                'type' => 'email',
                'content' => 'nurislam.paud@gmail.com'
            ],
            [
                'type' => 'twitter',
                'content' => '#'
            ],
            [
                'type' => 'facebook',
                'content' => '#'
            ],
            [
                'type' => 'instagram',
                'content' => '#'
            ],
            [
                'type' => 'youtube',
                'content' => '#'
            ],
        ]);
    }
}
