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
        Schema::create('detail_jumlahs', function (Blueprint $table) {
            $table->id();
            $table->foreign('tagihan')->references('jumlah')->on('tagihans');
            $table->string('no_nota');
            $table->string('pelanggan');
            $table->timestamps('tanggal_JT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jumlahs');
    }
};
