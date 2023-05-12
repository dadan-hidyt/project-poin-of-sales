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
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->unique()->nullable();
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->unsignedBigInteger('id_meja')->nullable();
            $table->string('type')->default("FREE_TABLE");
            $table->string('total_tagihan');
            $table->string('kode_voucher')->nullable();
            $table->string('jumlah_potongan_voucher')->default(0);
            $table->string('id_kasir')->nullable();
            $table->string('jumlah_pelanggan')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pesanan');
    }
};
