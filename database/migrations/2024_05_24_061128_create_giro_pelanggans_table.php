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
        Schema::create('giro_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->timestamps('tanggal_giro');
            $table->timestamps('tanggal_rv');
            $table->foreign('area')->references('kode_area')->on('areas');
            $table->foreign('pelanggan')->references('kode_pelanggan')->on('pelanggans');
            $table->integer('jumlah');
            $table->timestamp('tanggal_jt');
            $table->timestamp('tanggal_tm');
            $table->integer('no_dt');
            $table->string('bank');
            $table->string('keterangan');
            $table->integer('sisa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giro_pelanggans');
    }
};
