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
        Schema::create('pegawai', function (Blueprint $t) {
            $t->id();
            $t->string('nama_pegawai');
            $t->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $t->enum('pendidikan_terakhir', ['SMA/SMK', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $t->date('tanggal_lahir');
            $t->timestamps();
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
