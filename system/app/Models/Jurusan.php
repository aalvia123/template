<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'Jurusan_id';
    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'nama_kajur',
    ];
}
