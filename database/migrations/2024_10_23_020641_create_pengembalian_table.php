<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('pengembalian', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_alat')->constrained('inventaris');
        $table->foreignId('id_peminjaman')->constrained('users');
        $table->integer('jumlah');
        $table->date('tgl_kembali');
        $table->enum('kondisi_kembali', ['Baik', 'Rusak']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian');
    }
};
