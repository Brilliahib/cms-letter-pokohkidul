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
        Schema::create('surat_nikahs', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('name');
            $table->text('nik');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('kewarganegaraan');
            $table->text('agama');
            $table->text('pekerjaan');
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
        Schema::dropIfExists('surat_nikahs');
    }
};
