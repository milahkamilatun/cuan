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
        Schema::create('daftar_notas', function (Blueprint $table) {
            $table->id();
            $table->string('no_nota');
            $table->timestamps('tanggal_nota');
            $table->integer('jumlah');
            $table->integer('sisa_nota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_notas');
    }
};
