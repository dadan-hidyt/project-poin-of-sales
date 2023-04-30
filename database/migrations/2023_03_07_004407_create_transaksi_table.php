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
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->dateTime('tanggal_order');
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->string('type_order')->default('lainya');
            $table->unsignedBigInteger('id_metode_pembayaran');
            $table->text('catatan');
            $table->unsignedBigInteger('id_kasir');
            $table->integer('jumlah');
            $table->string('id_meja')->nullable();
            $table->string('status_pembayaran');
            $table->string('jmlh_bayar')->default(0);
            $table->string('kode_diskon')->nullable();
            $table->integer('total_diskon')->nullable();
            $table->string('kode_promo')->nullable();
            $table->integer('total_promo')->nullable();
            $table->enum('refund',['1','0'])->default(NULL);
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
