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
        Schema::create('surat_tidak_mampus', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('name');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('nik');
            $table->text('no_kk');
            $table->text('alamat');
            $table->text('keperluan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tidak_mampus');
    }
};
