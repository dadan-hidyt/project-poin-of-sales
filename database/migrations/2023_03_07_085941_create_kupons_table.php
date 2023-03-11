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
            $table->string('kode_kupon',5);
            $table->enum('jenis_kupon',['SP','PP'])->default('SP');
            $table->string('kode_produk',8)->nullable();
            $table->integer('jumlah_kupon')->default(0);
            $table->integer('jumlah_terpakai')->default(0);
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
        Schema::dropIfExists('kupons');
    }
};
