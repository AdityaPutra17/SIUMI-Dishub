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
        Schema::create('mamins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('qty');
            $table->integer('anggaran');
            $table->string('ket');
            $table->enum('status',['Pengadaan', 'Penggunaan']);
            $table->enum('jenis', ['konsumsi', 'Natura']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mamins');
    }
};
