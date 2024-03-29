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
        Schema::create('tb_detail_pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('id_pesanan');
            $table->text('pesanan')->nullable();
            $table->string('id_produk');
            $table->string('varian')->nullable();
            $table->text('catatan')->nullable();
            $table->string('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_pesanan');
    }
};
