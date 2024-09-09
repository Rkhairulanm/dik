<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ppdb_tk_nur_islam', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap_anak');
            $table->string('tempat_lahir_anak');
            $table->date('tanggal_lahir_anak');
            $table->enum('jenis_kelamin_anak', ['laki-laki', 'perempuan']);
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('nik_anak');
            $table->string('nama_orang_tua');
            $table->string('nik_orang_tua');
            $table->string('nomor_telepon_orang_tua');
            $table->string('email_orang_tua');
            $table->text('keterangan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_tk_nur_islam');
    }
};
