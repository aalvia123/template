<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    function index(){
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('mahasiswa.index', $data);
    }

    function create(){
        return view('mahasiswa.create');

    }
    function store() {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama_lengkap = request('nama_lengkap');
        $mahasiswa->nim = request('nim');
        $mahasiswa->jurusan_id = request('jurusan_id');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->email = request('email');
        $mahasiswa->password = request('password');
        $mahasiswa->save();

        return redirect('mahasiswa')->with('success', 'Data berhasil ditambahkan!');

    }

    function show(Mahasiswa $mahasiswa){
        $data['detail'] = $mahasiswa;
        return view('mahasiswa.show',$data);
    }
}
