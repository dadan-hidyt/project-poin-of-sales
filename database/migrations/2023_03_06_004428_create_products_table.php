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
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->unique();
            $table->string('nama_produk',120);
            $table->unsignedBigInteger('id_kategori_produk');
            $table->string('sku',12)->nullable();
            $table->integer('harga_modal')->default(0);
            $table->integer('harga_jual')->default(0);
            $table->integer('sisa_stok')->default(0);
            $table->enum('produk_favorit',['Y','N']);
            $table->string('satuan',50);
            $table->integer('harga_beli')->default(0);
            $table->char('pajak',120)->nullable();
            $table->integer('stok')->default(0);
            $table->string('gambar_produk', 120)->nullable();
            $table->text('deskripsi')->nullable();
            $table->enum('tampil_dimenu',['Y','N'])->default('Y');
            $table->unsignedBigInteger('id_varian')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
