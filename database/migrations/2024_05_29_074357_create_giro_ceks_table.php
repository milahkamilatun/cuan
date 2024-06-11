<?php

use App\Models\kode_jenis_bayar;
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
        Schema::create('giro_ceks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jenis_bayar');
            $table->foreign('daftar_giro_pelanggan')->references('nama')->on('daftar_giro_pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giro_ceks');
    }
};
