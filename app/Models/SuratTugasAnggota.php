<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugasAnggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'surat_tugas_id',
        'name',
        'jabatan',
    ];

    public function suratTugas()
    {
        return $this->belongsTo(SuratTugas::class);
    }
}
