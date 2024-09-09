<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder AboutSeeder
        $this->call(AboutSeeder::class);

        // Memanggil seeder ContactSeeder
        $this->call(ContactSeeder::class);

        // Memanggil seeder KegiatanSeeder
        $this->call(KegiatanSeeder::class);

        // Memanggil seeder ManagementSeeder
        $this->call(ManagementSeeder::class);

        // Seeder lainnya jika ada
        $this->call(UserSeeder::class);
    }
}
