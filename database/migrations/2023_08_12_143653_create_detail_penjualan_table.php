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
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->bigInteger('id_penjualan')->unsigned();
            $table->foreign('id_penjualan')->references('id')->on('penjualan')->onDelete('cascade');
            $table->bigInteger('id_domba')->unsigned();
            $table->foreign('id_domba')->references('id')->on('domba')->onDelete('cascade');
            $table->integer('harga_jual')->unsigned()->nullable()->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualan');
    }
};
