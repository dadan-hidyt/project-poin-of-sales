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
        Schema::create('tb_pengaturan_web', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web')->nullable();
            $table->string('logo')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('email_usaha')->nullable();
            $table->string('no_telpon_usaha')->nullable();
            $table->string('akun_instagram')->nullable();
            $table->string('chanel_yt')->nullable();
            $table->string('akun_fb')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengaturan_web');
    }
};
