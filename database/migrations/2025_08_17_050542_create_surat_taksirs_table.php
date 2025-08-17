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
        Schema::create('surat_taksirs', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('jenis_sertifikat');
            $table->text('nomor_sertifikat');
            $table->text('letak_tanah');
            $table->text('berupa_tanah');
            $table->text('name');
            $table->text('alamat');
            $table->text('batas_utara');
            $table->text('batas_selatan');
            $table->text('batas_timur');
            $table->text('batas_barat');
            $table->integer('harga_tanah_per_m');
            $table->integer('luas_tanah');
            $table->integer('harga_bangunan_per_m');
            $table->integer('luas_bangunan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_taksirs');
    }
};
