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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jadwal')->constrained('jadwals')->onDelete('cascade');
            $table->enum('status_hadir', ['izin', 'alpa', 'hadir', 'terlambat']);
            $table->enum('ket', ['datang', 'pulang']);
            $table->string('foto_selfie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
