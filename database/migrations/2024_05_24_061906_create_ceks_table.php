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
        Schema::create('ceks', function (Blueprint $table) {
            $table->id();
            $table->foreign('pelunasan')->references('kode_jenis_bayar')->on('pelunasans');
            $table->string('nama_jenis_bayar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceks');
    }
};
