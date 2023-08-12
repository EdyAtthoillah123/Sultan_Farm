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
        Schema::create('domba', function (Blueprint $table) {
            $table->id();
            $table->string('kode_domba', 100)->nullable();
            $table->string('nama_domba', 100)->nullable();
            // $table->enum('jk', ['j', 'b'])->nullable()->default(['j', 'b']);
            $table->integer('bobot')->unsigned()->nullable()->default(12);
            $table->string('induk_jantan', 100)->nullable();
            $table->string('induk_betina', 100)->nullable();
            $table->string('tipe_domba', 100)->nullable();
            $table->integer('turunan')->unsigned()->nullable()->default(12);
            $table->string('gambar', 100)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domba');
    }
};
