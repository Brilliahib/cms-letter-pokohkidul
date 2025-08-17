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
        Schema::create('surat_kematians', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('nik');
            $table->text('nama_lengkap');
            $table->text('anak_ke');
            $table->date('tanggal_kematian');
            $table->time('pukul');
            $table->text('sebab_kematian');
            $table->text('tempat_kematian');
            $table->text('yang_menerangkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_kematians');
    }
};
