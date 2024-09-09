<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Kegiatan;
use App\Models\Management;
use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{

    public function contact()
    {
        $contact = ContactInfo::get();
        return view('webcontrol.contact', compact('contact')); // Mengembalikan tampilan halaman contact
    }
    public function contactedit($id)
    {
        $contact = ContactInfo::where('id', $id)->first();
        return view('webcontrol.contactedit', compact('contact'));
    }
    public function contactupdate(Request $request, $id)
    {
        $contact = ContactInfo::findOrFail($id);

        $contact->update($request->all());

        return redirect()->route('contact.edit', $id)->with('success', 'Data Contact berhasil diperbarui.');
    }
    public function about()
    {
        $about = About::get();
        return view('webcontrol.about', compact('about')); // Mengembalikan tampilan halaman about
    }
    public function aboutedit($id)
    {
        $about = About::where('id', $id)->first();
        return view('webcontrol.aboutedit', compact('about'));
    }
    public function aboutupdate(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $about->update($request->all());

        return redirect()->route('about.edit', $id)->with('success', 'Data About berhasil diperbarui.');
    }
    public function management()
    {
        $management = Management::get();
        return view('webcontrol.management', compact('management')); // Mengembalikan tampilan halaman management
    }
    public function managementedit($id)
    {
        $management = Management::where('id', $id)->first();
        // dd($management);
        return view('webcontrol.managementedit', compact('management'));
    }
    public function managementupdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $management = Management::findOrFail($id);

        // Menangani upload gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($management->image && Storage::exists('public/images/' . $management->image)) {
                Storage::delete('public/images/' . $management->image);
            }

            // Upload gambar baru
            $imagePath = $request->file('image')->store('public/images');
            $management->image = basename($imagePath);
        }

        $management->name = $request->input('name');
        $management->position = $request->input('position');
        $management->twitter = $request->input('twitter');
        $management->facebook = $request->input('facebook');
        $management->instagram = $request->input('instagram');
        $management->linkedin = $request->input('linkedin');

        $management->save();

        return redirect()->route('management.edit', $id)
            ->with('success', 'Data management berhasil diperbarui.');
    }

    public function kegiatan()
    {
        $jumlahKegiatan = Kegiatan::count();
        $kegiatan = Kegiatan::get();
        return view('webcontrol.kegiatan', compact('kegiatan', 'jumlahKegiatan')); // Mengembalikan tampilan halaman kegiatan
    }
    public function kegiatancreate()
    {
        return view('webcontrol.kegiatantambah'); // Ganti dengan nama view yang sesuai
    }

    // Menyimpan data kegiatan baru
    public function kegiatanstore(Request $request)
    {
        $jumlahKegiatan = Kegiatan::count();
        if ($jumlahKegiatan >= 6) {
            return redirect()->route('kegiatan')
                ->with('success', 'Data Sudah Melebihi Maksimal');
        } else {
            // $request->validate([
            //     'type' => 'required|max:255',
            //     'name' => 'required|max:255',
            //     'description' => 'required|max:5000',
            //     'organizer' => 'required|max:255',
            //     'published' => 'nullable|boolean',
            //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);

            $kegiatan = new Kegiatan();

            // Menangani upload gambar
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/images');
                $kegiatan->image = basename($imagePath);
            }

            $kegiatan->title = $request->input('title');
            $kegiatan->description = $request->input('description');
            $kegiatan->author = $request->input('organizer');
            $kegiatan->published = $request->input('published', false);

            $kegiatan->save();

            return redirect()->route('kegiatan')
                ->with('success', 'Data kegiatan berhasil ditambahkan.');
        }
    }
    public function kegiatanedit($id)
    {
        $kegiatan = Kegiatan::where('id', $id)->first();
        return view('webcontrol.kegiatanedit', compact('kegiatan'));
    }
    public function kegiatanupdate(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'position' => 'required|string|max:255',
        //     'twitter' => 'nullable|string|max:255',
        //     'facebook' => 'nullable|string|max:255',
        //     'instagram' => 'nullable|string|max:255',
        //     'linkedin' => 'nullable|string|max:255',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $kegiatan = Kegiatan::findOrFail($id);

        // Menangani upload gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($kegiatan->image && Storage::exists('public/images/' . $kegiatan->image)) {
                Storage::delete('public/images/' . $kegiatan->image);
            }

            // Upload gambar baru
            $imagePath = $request->file('image')->store('public/images');
            $kegiatan->image = basename($imagePath);
        }

        $kegiatan->title = $request->input('title');
        $kegiatan->description = $request->input('description');
        $kegiatan->author = $request->input('author');
        $kegiatan->published = $request->input('published', false);


        $kegiatan->save();

        return redirect()->route('kegiatan.edit', $id)
            ->with('success', 'Data kegiatan berhasil diperbarui.');
    }
    public function updateStatus(Request $request, $id)
    {
        // Temukan record berdasarkan ID
        $management = Management::findOrFail($id);

        // Perbarui status published
        $management->published = $request->has('published') ? true : false;

        $management->save();

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
