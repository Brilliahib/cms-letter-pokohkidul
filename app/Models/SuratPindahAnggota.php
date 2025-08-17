<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPindahAnggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'shdk',
        'surat_pindah_id',
    ];

    public function suratPindah()
    {
        return $this->belongsTo(SuratPindah::class);
    }
}
