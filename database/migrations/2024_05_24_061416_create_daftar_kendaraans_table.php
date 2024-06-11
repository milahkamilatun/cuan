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
        Schema::create('daftar_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->foreign('nopol')->references('plat_nomor')->on('nopols'); 
            $table->string('jenis_kendaraan');
            $table->string('bbm');
            $table->string('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_kendaraans');
    }
};
