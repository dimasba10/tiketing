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
        Schema::create('penumpangs', function (Blueprint $table) {
            $table->bigIncrements('id_penumpang');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama_penumpang');
            $table->text('alamat_penumpang');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('telefon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penumpangs');
    }
};
