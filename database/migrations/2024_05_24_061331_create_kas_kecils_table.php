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
        Schema::create('kas_kecils', function (Blueprint $table) {
            $table->id();
            $table->foreign('area')->references('kode_area')->on('areas');            $table->date('periode');
            $table->timestamps('periode');
            $table->timestamps('tanggal_kas_kecil');
            $table->timestamps('tanggal_bukti');
            $table->string('keterangan');
            $table->integer('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas_kecils');
    }
};
