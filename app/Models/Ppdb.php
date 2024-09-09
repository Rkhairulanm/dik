<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdb_tk_nur_islam';

    protected $fillable = [
        'nama_lengkap_anak',
        'tempat_lahir_anak',
        'tanggal_lahir_anak',
        'jenis_kelamin_anak',
        'alamat_lengkap',
        'nomor_telepon',
        'email',
        'nik_anak',
        'nama_orang_tua',
        'nik_orang_tua',
        'nomor_telepon_orang_tua',
        'email_orang_tua',
        'keterangan_tambahan'
    ];
}
