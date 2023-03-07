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
        Schema::create('tb_detail_transaksi', function (Blueprint $table) {
            $table->uuid('id_detail_transaksi')->primary();
            $table->uuid('id_transaksi');
            $table->uuid('kode_produk');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('subtotal');
            $table->string('persentase_pajak');//persentase pajak yang di dapatkan dari produk
            $table->integer('total_pajak');//total pajak
            $table->integer('total');//total yang sudah di hitung dengan pajak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
