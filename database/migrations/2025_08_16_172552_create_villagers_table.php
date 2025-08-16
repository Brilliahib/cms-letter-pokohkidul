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
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('no_kk');
            $table->text('nik');
            $table->enum('gender', ['male', 'female']);
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->text('pekerjaan')->nullable();
            $table->text('status_perkawinan')->nullable();
            $table->text('shdk')->nullable();
            $table->text('kewarganegaraan');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->text('nama_ibu')->nullable();
            $table->text('nama_ayah')->nullable();
            $table->integer('umur')->nullable();
            $table->text('kriteria_usia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villagers');
    }
};
