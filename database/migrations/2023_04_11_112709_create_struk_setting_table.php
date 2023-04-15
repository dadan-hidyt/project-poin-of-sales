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
        Schema::create('struk_setting', function (Blueprint $table) {
            $table->id();
            $table->string('group_name')->unique();
            $table->enum('alamat',[1,0]);
            $table->enum('no_telp', [1,0]);
            $table->enum('email', [1,0]);
            $table->text('catatan');
            $table->enum('active',['Y','N']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struk_setting');
    }
};
