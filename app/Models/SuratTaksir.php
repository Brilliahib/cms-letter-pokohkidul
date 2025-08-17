<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTaksir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'jenis_sertifikat',
        'nomor_sertifikat',
        'letak_tanah',
        'berupa_tanah',
        'name',
        'alamat',
        'batas_utara',
        'batas_selatan',
        'batas_timur',
        'batas_barat',
        'harga_tanah_per_m',
        'luas_tanah',
        'harga_bangunan_per_m',
        'luas_bangunan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat) {
                $kode = "09";
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
