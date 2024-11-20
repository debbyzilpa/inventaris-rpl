<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alat');
            $table->unsignedBigInteger('id_peminjaman');
            $table->integer('jumlah');
            $table->date('tgl_peminjaman');
            $table->enum('kondisi_pinjam', ['Baik', 'Rusak']);
            $table->timestamps();

            $table->foreign('id_alat')->references('id')->on('inventaris')->onDelete('cascade');
            $table->foreign('id_peminjaman')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}

