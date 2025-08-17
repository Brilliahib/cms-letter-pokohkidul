<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKelahiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'nama_anak',
        'jenis_kelamin',
        'tempat_dilahirkan',
        'tempat_kelahiran',
        'sebab_lahir',
        'tanggal_lahir',
        'waktu_lahir',
        'jenis_kelahiran',
        'kelahiran_ke',
        'penolongan_kelahiran',
        'berat_bayi',
        'panjang_bayi',
        'lama_kandungan',
        'anak_ke',
        'sebab_lahir',
        'yang_menentukan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat) {
                $kode = "06";
                $id = (self::max('id') ?? 0) + 1;

                $tanggal = $model->created_at ?? Carbon::now();
                $bulan = Carbon::parse($tanggal)->month;
                $tahun = Carbon::parse($tanggal)->year;
                $bulanRomawi = FormatHelper::bulanRomawi($bulan);

                $model->nomor_surat = "{$kode}/{$id}/{$bulanRomawi}/{$tahun}";
            }
        });
    }
}
