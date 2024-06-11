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
        Schema::create('daftar_akuns', function (Blueprint $table) {
            $table->id();
            $table->foreign('kode_rekening')->references('kode_rekening')->on('kode_rekenings'); 
            $table->integer('nomor_rekening');
            $table->timestamps('tanggal_rekening');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_akuns');
    }
};
