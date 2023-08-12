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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_customer')->unsigned()->nullable()->default(12);
            $table->integer('id_paket')->unsigned()->nullable()->default(12);
            $table->integer('paket')->unsigned()->nullable()->default(12);
            $table->integer('no_penjualan')->unsigned()->nullable()->default(12);
            $table->bigInteger('id_pegawai')->unsigned();
            $table->foreign('id_pegawai')->references('id')->on('pegawai')->onDelete('cascade');
            // $table->date('tgl_penjualan')->nullable()->default(new DateTime());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
