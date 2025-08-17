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
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('dasar_surat');
            $table->text('keperluan_tugas');
            $table->timestamps();
        });

        Schema::create('surat_tugas_anggotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surat_tugas_id')->constrained('surat_tugas')->onDelete('cascade');
            $table->string('name');
            $table->string('jabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tugas_anggotas');
        Schema::dropIfExists('surat_tugas');
    }
};
