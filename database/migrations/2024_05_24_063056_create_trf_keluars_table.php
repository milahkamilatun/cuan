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
        Schema::create('trf_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_transfer');
            $table->foreign('daftar_pemasok')->references('pemasok')->on('daftar_pemasoks');
            $table->string('nama_bank');
            $table->string('keterangan');
            $table->string('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trf_keluars');
    }
};
