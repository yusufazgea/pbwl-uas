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
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->increments('pesanan_id');
            $table->Integer('pesanan_pelanggan_id')->unsigned();
            $table->Integer('pesanan_kendaraan_id')->unsigned();
            $table->foreign('pesanan_pelanggan_id')->references('pelanggan_id')->on('tb_pelanggan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pesanan_kendaraan_id')->references('kendaraan_id')->on('tb_kendaraan')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('pesanan_hari');
            $table->bigInteger('pesanan_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pesanan');
    }
};
