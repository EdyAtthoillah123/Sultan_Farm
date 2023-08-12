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
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->bigInteger('id_pembelian')->unsigned();
            $table->foreign('id_pembelian')->references('id')->on('pembelian')->onDelete('cascade');
            $table->bigInteger('id_domba')->unsigned();
            $table->foreign('id_domba')->references('id')->on('domba')->onDelete('cascade');
            $table->integer('harga_beli')->unsigned()->nullable()->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pembelian');
    }
};
