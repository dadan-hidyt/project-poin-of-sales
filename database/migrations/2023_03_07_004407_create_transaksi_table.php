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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->uuid('id_transaksi')->primary();
            $table->dateTime('tanggal_order');
            $table->uuid('id_pelanggan');
            $table->unsignedBigInteger('id_metode_pembayaran');
            $table->text('catatan');
            $table->integer('jumlah');
            $table->string('status_pembayaran');
            $table->string('kode_diskon')->nullable();
            $table->integer('total_diskon')->nullable();
            $table->string('kode_promo')->nullable();
            $table->integer('total_promo')->nullable();
            $table->integer('total_biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
