<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_pindahs', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('no_kk');
            $table->text('nama_lengkap');
            $table->text('nik');
            $table->text('jenis_permohonan');
            $table->text('alamat_asal');
            $table->text('rt_asal');
            $table->text('rw_asal');
            $table->text('desa_kelurahan_asal');
            $table->text('kecamatan_asal');
            $table->text('kabupaten_kota_asal');
            $table->text('provinsi_asal');
            $table->text('kodepos_asal');
            $table->text('klasifikasi_kepindahan');
            $table->text('alamat_pindah');
            $table->text('rt_pindah');
            $table->text('rw_pindah');
            $table->text('desa_kelurahan_pindah');
            $table->text('kecamatan_pindah');
            $table->text('kabupaten_kota_pindah');
            $table->text('provinsi_pindah');
            $table->text('kodepos_pindah');
            $table->text('alasan_pindah');
            $table->text('jenis_kepindahan');
            $table->text('anggota_keluarga_tidak_pindah');
            $table->text('anggota_keluarga_pindah');
            $table->timestamps();
        });

        Schema::create('surat_pindah_anggotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surat_pindah_id')->constrained('surat_pindahs')->onDelete('cascade');
            $table->string('name');
            $table->text('nik');
            $table->text('shdk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pindahs');
        Schema::dropIfExists('surat_pindah_anggotas');
    }
};
