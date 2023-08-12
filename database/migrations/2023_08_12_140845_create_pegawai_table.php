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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('email', 16)->nullable();
            $table->string('name', 100);
            $table->integer('no_telp')->unsigned()->nullable()->default(12);
            $table->string('alamat', 100);
            $table->string('password', 100);
            // $table->enum('jk', ['L', 'P'])->nullable()->default(['L', 'P']);
            $table->integer('nip')->unsigned()->nullable()->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
