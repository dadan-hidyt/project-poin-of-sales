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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->uuid('kode_pelanggan')->primary();
            $table->string('nama',50);
            $table->string('email',89);
            $table->string('no_hp',50);
            $table->text('alamat');
            $table->integer('poin')->default(0);
            $table->date('tanggal_lahir')->nullable();
            $table->string('kota',125)->nullable();
            $table->enum('jenis_kelamin', ['L','P'])->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
