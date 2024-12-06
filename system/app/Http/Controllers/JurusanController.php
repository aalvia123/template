<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    // Menampilkan daftar jurusan
    public function index()
    {
        $data['list_jurusan'] = Jurusan::all();
        return view('jurusan.index', $data);
    }

    // Menampilkan form untuk menambah jurusan baru
    public function create()
    {
        return view('jurusan.create');
    }

    // Menyimpan data jurusan baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_jurusan' => 'required|string|max:10',
            'nama_jurusan' => 'required|string|max:255',
            'nama_kajur' => 'required|string|max:255',
        ]);

        Jurusan::create($validated);
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    // Menampilkan detail data jurusan
    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id); // Cari data jurusan berdasarkan ID
        return view('jurusan.edit', compact('jurusan')); // Kirim data jurusan ke view
    }

    // Mengupdate data jurusan
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode_jurusan' => 'required|string|max:10',
            'nama_jurusan' => 'required|string|max:255',
            'nama_kajur' => 'required|string|max:255',
        ]);

        // Cari data jurusan berdasarkan ID
        $jurusan = Jurusan::findOrFail($id);

        // Update data jurusan
        $jurusan->update($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan berhasil diperbarui');
    }

 public function destroy($id)
 {
     $jurusan = Jurusan::find($id);

     if ($jurusan) {
         $jurusan->delete(); // Hapus data dari database
         return redirect()->route('jurusan.index')->with('success', 'Data berhasil dihapus');
     } else {
         return redirect()->route('jurusan.index')->with('error', 'Data tidak ditemukan');
     }
 }


}
