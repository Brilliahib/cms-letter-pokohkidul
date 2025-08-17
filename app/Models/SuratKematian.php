<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKematian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'nik',
        'nama_lengkap',
        'anak_ke',
        'tanggal_kematian',
        'pukul',
        'sebab_kematian',
        'tempat_kematian',
        'yang_menerangkan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat) {
                $kode = "07";
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
