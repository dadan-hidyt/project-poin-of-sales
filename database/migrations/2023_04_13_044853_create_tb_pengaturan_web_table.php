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
            $table->string('nama_web');
            $table->string('logo');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->string('email_usaha');
            $table->string('no_telpon_usaha');
            $table->string('akun_instagram');
            $table->string('chanel_yt');
            $table->string('akun_fb');
            $table->string('website');
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
