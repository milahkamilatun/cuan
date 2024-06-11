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
        Schema::create('pelunasans', function (Blueprint $table) {
            $table->id();
            $table->foreign('no_dt')->references('no_dt')->on('no_dts');
            $table->string('area');
            $table->foreign('pelanggan')->references('kode_pelanggan')->on('pelanggans');  
            $table->string('giro');
            $table->string('bank');
            $table->timestamps('tanggal_jt');
            $table->timestamps('tanggal_cair');
            $table->integer('jumlah');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelunasans');
    }
};
