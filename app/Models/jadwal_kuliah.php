<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class jadwal_kuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliahs';

    protected $fillable = [
        'kd_mkul',
        'nama_mkul',
        'kd_dosen',
        'jam',
        'ruang_kelas',
        'jumlah_mhs',
        'tanggal_mulai',
    ];
}
