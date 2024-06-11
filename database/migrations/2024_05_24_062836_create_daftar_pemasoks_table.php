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
        Schema::create('daftar_pemasoks', function (Blueprint $table) {
            $table->id();
            $table->foreign('master_giro_gdu')->references('pemasok')->on('master_giro_gdus');
            $table->string('kode_supplier');
            $table->string('nama_supplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pemasoks');
    }
};
