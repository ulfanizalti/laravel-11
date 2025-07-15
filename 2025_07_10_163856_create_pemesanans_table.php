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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('telp');
            $table->string('email');
            $table->string('alamat_penjemputan');
            $table->string('jenis_pemesanan');
            $table->string('jenis_layanan');
            $table->date('tanggal_penjemputan');
            $table->time('jam_penjemputan');
            $table->string('pengiriman');
            $table->string('status')->default('Pending');
            $table->decimal('berat')->nullable();
            $table->decimal('total_harga')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
