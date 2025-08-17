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
        Schema::create('surat_kelahirans', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('nama_anak');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->text('tempat_dilahirkan');
            $table->text('tempat_kelahiran');
            $table->date('tanggal_lahir');
            $table->time('waktu_lahir');
            $table->text('jenis_kelahiran');
            $table->text('kelahiran_ke');
            $table->text('penolongan_kelahiran');
            $table->text('berat_bayi');
            $table->text('panjang_bayi');
            $table->text('lama_kandungan');
            $table->text('anak_ke');
            $table->text('sebab_lahir');
            $table->text('yang_menentukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_kelahirans');
    }
};
