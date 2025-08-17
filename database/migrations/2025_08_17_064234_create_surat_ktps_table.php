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
        Schema::create('surat_ktps', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('provinsi');
            $table->text('kabupaten_kota');
            $table->text('kecamatan');
            $table->text('desa_kelurahan');
            $table->text('name');
            $table->text('nik');
            $table->text('no_kk');
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('umur');
            $table->text('daerah');
            $table->text('rt');
            $table->text('rw');
            $table->text('alamat_lengkap');
            $table->text('kode_pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_ktps');
    }
};
