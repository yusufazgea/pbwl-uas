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
            $table->increments('pelanggan_id');
            $table->bigInteger('pelanggan_nik');
            $table->string('pelanggan_nama');
            $table->string('pelanggan_alamat');
            $table->enum('pelanggan_jenkel', ['Laki - Laki','Perempuan']);
            $table->string('pelanggan_email');
            $table->string('pelanggan_nohp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
