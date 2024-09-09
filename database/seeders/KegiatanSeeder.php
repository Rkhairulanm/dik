<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KegiatanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus data yang ada di tabel kegiatan sebelum menambahkan data baru
        DB::table('kegiatans')->truncate();

        // Menambahkan data ke tabel kegiatan
        DB::table('kegiatans')->insert([
            [
                'title' => 'Workshop Web Development',
                'description' => 'Workshop tentang pengembangan web untuk pemula.',
                'author' => 'Komunitas Developer',
                'published' => 1,
                'image' => 'workshop_web_dev.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konferensi Teknologi',
                'description' => 'Konferensi tahunan tentang inovasi teknologi terbaru.',
                'author' => 'Tech Forum',
                'published' => 1,
                'image' => 'tech_conference.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pameran Seni Digital',
                'description' => 'Pameran untuk menunjukkan karya seni digital.',
                'author' => 'Art Community',
                'published' => 0,
                'image' => 'digital_art_exhibition.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Seminar Kewirausahaan',
                'description' => 'Seminar tentang cara memulai dan mengelola bisnis.',
                'author' => 'Entrepreneur Network',
                'published' => 1,
                'image' => 'entrepreneur_seminar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lomba Coding',
                'description' => 'Kompetisi coding dengan berbagai tantangan menarik.',
                'author' => 'Code Masters',
                'published' => 0,
                'image' => 'coding_competition.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Festival Musik',
                'description' => 'Festival musik dengan berbagai penampilan artis lokal.',
                'author' => 'Music Lovers',
                'published' => 1,
                'image' => 'music_festival.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kursus Bahasa Inggris',
                'description' => 'Kursus intensif bahasa Inggris untuk semua tingkat.',
                'author' => 'Language Academy',
                'published' => 1,
                'image' => 'english_course.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
