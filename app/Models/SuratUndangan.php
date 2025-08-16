<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratUndangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'sifat',
        'lampiran',
        'hal',
        'tanggal_surat',
        'waktu_surat',
        'tempat',
        'acara',
        'keterangan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat && $model->tanggal_surat) {
                $kode = "01";
                $id = (self::max('id') ?? 0) + 1;
                $bulan = Carbon::parse($model->tanggal_surat)->month;
                $tahun = Carbon::parse($model->tanggal_surat)->year;
                $bulanRomawi = FormatHelper::bulanRomawi($bulan);

                $model->nomor_surat = "{$kode}/{$id}/{$bulanRomawi}/{$tahun}";
            }
        });
    }
}
