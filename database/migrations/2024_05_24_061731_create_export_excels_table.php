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
        Schema::create('export_excels', function (Blueprint $table) {
            $table->id();
            $table->foreign('tanggal_awal')->references('jumlah')->on('tanggal_awals');
            $table->timestamps('tanggal_akhir');
            $table->string('area');
            $table->integer('no_lkh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('export_excels');
    }
};
