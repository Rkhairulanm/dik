<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdbs = Ppdb::get(); // Ambil semua data PPDB
        return view('ppdb.index', compact('ppdbs'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_lengkap_anak' => 'required|string|max:255',
            'tempat_lahir_anak' => 'required|string|max:255',
            'tanggal_lahir_anak' => 'required|date',
            'jenis_kelamin_anak' => 'required|in:laki-laki,perempuan',
            'alamat_lengkap' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'nik_anak' => 'required|string|max:20',
            'nama_orang_tua' => 'required|string|max:255',
            'nik_orang_tua' => 'required|string|max:20',
            'nomor_telepon_orang_tua' => 'required|string|max:20',
            'email_orang_tua' => 'required|email|max:255',
            'keterangan_tambahan' => 'nullable|string',
        ]);

        // Simpan data ke database
        Ppdb::create($validated);

        // Redirect dengan pesan sukses
        return redirect('/#pendaftaran')->with('success', 'Pendaftaran berhasil!');
    }


    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->delete();

        return redirect()->route('ppdb')->with('success', 'Data ppdb berhasil dihapus.');
    }
}
