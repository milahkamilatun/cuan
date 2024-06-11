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
        Schema::create('trf_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_trf');
            $table->foreign('kode_area')->references('daftar_area')->on('kode_areas');
            $table->string('pelanggan');
            $table->integer('jumlah');
            $table->string('nama_bank');
            $table->string('salesmen');
            $table->string('keterangan');
            $table->integer('sisa');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trf_masuks');
    }
};
