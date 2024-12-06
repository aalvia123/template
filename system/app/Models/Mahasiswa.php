<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa_aktif';
    protected $primaryKey = 'mahasiswa_id';
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'jurusan_id',
        'jenis_kelamin',
        'email',
        'password',
    ];
}
