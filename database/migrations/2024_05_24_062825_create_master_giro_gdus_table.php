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
        Schema::create('master_giro_gdus', function (Blueprint $table) {
            $table->id();
            $table->foreign('giro')->references('giro_pelanggan')->on('giros');
            $table->string('payment_voucher');
            $table->string('pemasok');
            $table->integer('jumlah');
            $table->integer('sisa');
            $table->timestamps('tanggal_jt');
            $table->timestamps('tanggal_cair');
            $table->string('bank');
            $table->string('keterangan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_giro_gdus');
    }
};
