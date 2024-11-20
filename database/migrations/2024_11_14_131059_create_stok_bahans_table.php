<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_bahans', function (Blueprint $table) {
            $table->id(); // id auto increment
            $table->string('nama_bahan');
            $table->integer('stok_awal');
            $table->integer('stok_tambah');
            $table->integer('stok_keluar');
            $table->integer('stok_sisa');
            $table->integer('angka_perolehan');
            $table->integer('angka_penyusutan');
            $table->timestamps(); // timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_bahans');
    }
}
