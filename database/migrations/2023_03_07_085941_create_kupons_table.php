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
        Schema::create('tb_kupon', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kupon',5)->uniqid();
            $table->string('nama_kupon')->nullable();
            $table->text("deskripsi_kupon");
            $table->integer('id_produk')->nullable();
            $table->integer('jumlah_kupon')->default(0);
            $table->integer('jumlah_terpakai')->default(0);
            $table->string('jumlah_potongan')->default(0);
            $table->integer('jumlah_sisa')->default(0);
            $table->dateTime('masa_berlaku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kupon');
    }
};
