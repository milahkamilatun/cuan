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
        Schema::create('daftar_giro_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('no_giro');
            $table->timestamps('tanggal_jt');
            $table->timestamps('tanggal_cair');
            $table->integer('jumlah');
            $table->integer('sisa');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_giro_pelanggans');
    }
};
