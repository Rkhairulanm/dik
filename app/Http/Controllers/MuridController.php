<?php

namespace App\Http\Controllers;

use App\Models\murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murids = murid::get();
        return view('murid.index', compact('murids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('murid.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|max:12',
        ]);

        murid::create($validated);
        return redirect()->route('murid.create')->with('success', 'Pendaftaran berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = murid::findOrFail($id)->first();
        return view('murid.edit', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|max:12',
        ]);

        // Temukan model berdasarkan ID
        $murid = Murid::findOrFail($id);

        // Perbarui model dengan data yang sudah divalidasi
        $murid->update($validated);

        // Redirect atau lakukan tindakan tambahan
        return redirect()->route('murid')->with('success', 'Data murid berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = murid::findOrFail($id);
        $murid->delete();

        return redirect()->route('murid')->with('success', 'Data murid berhasil dihapus.');
    }
}
