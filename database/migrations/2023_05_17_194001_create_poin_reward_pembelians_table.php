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
        Schema::create('tb_poin_reward_pembelian', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['Y','N'])->default('N');
            $table->string('nama_point_reward', 225)->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah_poin')->default(0);
            $table->integer('min_pembelian')->default(0);
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_berakhir');
            $table->json('hari')->nullable();
            $table->boolean('semua_hari')->nullable();
            $table->enum('draft', ['Y','N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poin_reward_pembelians');
    }
};
