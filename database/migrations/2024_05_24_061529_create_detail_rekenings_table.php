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
        Schema::create('detail_rekenings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_rekening');
            $table->string('bukti_rekening');
            $table->timestamps('tanggal_bukti_rek');
            $table->integer('plat_nomor');
            $table->string('pengguna');
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->string('tempat');
            // $table->string('masuk');
            $table->string('kilometer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_rekenings');
    }
};
