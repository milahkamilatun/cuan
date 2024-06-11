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
        Schema::create('cek_pelunasans', function (Blueprint $table) {
            $table->id();
            $table->foreign('kode_area')->references('daftar_area')->on('kode_areas');
            $table->string('bank');
            $table->string('supplier');
            $table->string('alamat');
            $table->string('kota');
            $table->foreign('kode_area')->references('daftar_area')->on('kode_areas');
            $table->string('kota');
            $table->string('kota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_pelunasans');
    }
};
