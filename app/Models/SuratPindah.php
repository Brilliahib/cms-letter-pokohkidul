<?php

namespace App\Models;

use App\Helpers\FormatHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPindah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'no_kk',
        'nama_lengkap',
        'nik',
        'jenis_permohonan',
        'alamat_asal',
        'rt_asal',
        'rw_asal',
        'desa_kelurahan_asal',
        'kecamatan_asal',
        'kabupaten_kota_asal',
        'provinsi_asal',
        'kodepos_asal',
        'klasifikasi_kepindahan',
        'alamat_pindah',
        'rt_pindah',
        'rw_pindah',
        'desa_kelurahan_pindah',
        'kecamatan_pindah',
        'kabupaten_kota_pindah',
        'provinsi_pindah',
        'kodepos_pindah',
        'alasan_pindah',
        'jenis_kepindahan',
        'anggota_keluarga_tidak_pindah',
        'anggota_keluarga_pindah',
    ];

    public function anggotas()
    {
        return $this->hasMany(SuratPindahAnggota::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->nomor_surat) {
                $kode = "08";
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
