<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'no_kk',
        'nik',
        'gender',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'shdk',
        'kewarganegaraan',
        'alamat',
        'rt',
        'rw',
        'nama_ibu',
        'nama_ayah',
        'umur',
        'kriteria_usia',
    ];
}
