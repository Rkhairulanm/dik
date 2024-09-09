<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'content' => 'Pendidikan anak usia dini merupakan upaya pembinaan yang ditujukan kepada anak-anak
                            dari usia dini hingga enam tahun. Upaya ini dilakukan melalui pemberian rangsangan pendidikan
                            untuk mendukung pertumbuhan dan perkembangan fisik serta mental anak, sehingga mereka siap untuk
                            melanjutkan ke jenjang pendidikan berikutnya.
                            Yayasan Nur Islam Hasanah, sebagai lembaga sosial dan pendidikan, berkomitmen untuk berperan
                            aktif dalam mempersiapkan anak-anak berbakat menuju pendidikan yang lebih tinggi dengan
                            mendirikan Playgroup – TK Nur Islam. Playgroup – TK Nur Islam bertekad untuk memberikan
                            pendidikan yang berfokus pada pembentukan karakter anak melalui penanaman nilai-nilai Tauhid dan
                            Adab berdasarkan ajaran Alquran. Dengan demikian, diharapkan anak-anak dapat mengembangkan
                            nilai-nilai kerjasama, saling menghargai, perhatian, kasih sayang, gotong royong, dan
                            kemandirian sejak usia dini.'
        ]);
    }
}
