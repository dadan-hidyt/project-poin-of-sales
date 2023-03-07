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
        Schema::create('tb_varian_item', function (Blueprint $table) {
            $table->id();
            $table->string('nama_detail_varian',100);
            $table->unsignedBigInteger('id_varian');
            $table->string('harga_jual')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_varian_produks');
    }
};
