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
        Schema::create('tb_karyawan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('nik',50);
            $table->string('nama',50);
            $table->char('no_telp',16);
            $table->string('email',60);
            $table->string('avatar',120);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kariawans');
    }
};
