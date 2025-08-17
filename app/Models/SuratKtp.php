<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKtp extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'name',
        'nik',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'daerah',
        'rt',
        'rw',
        'alamat_lengkap',
        'kode_pos',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat) {
                $kode = "10";
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
