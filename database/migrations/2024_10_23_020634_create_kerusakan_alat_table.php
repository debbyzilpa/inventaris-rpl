<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel kerusakan_alat.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakan_alat', function (Blueprint $table) {
            $table->id();  // Membuat kolom id yang auto increment
            // Jika kolom foreign key Anda benar-benar bernama 'id_alat' dan merujuk ke 'id' pada tabel 'inventaris'
            $table->foreignId('id_alat')->constrained('inventaris');
            // Jika kolom foreign key Anda menggunakan nama selain 'id_alat', gunakan:
            // $table->foreignId('id_alat')->references('id')->on('inventaris');

            $table->text('spesifikasi')->nullable();  // Kolom untuk menyimpan spesifikasi alat (opsional)
            $table->text('kerusakan');  // Kolom untuk menyimpan deskripsi kerusakan alat
            $table->date('tgl_kerusakan');  // Kolom untuk menyimpan tanggal kerusakan alat
            $table->text('keterangan')->nullable();  // Kolom untuk menyimpan keterangan (opsional)
            $table->timestamps();  // Kolom untuk menyimpan created_at dan updated_at
        });
    }

    /**
     * Menghapus tabel kerusakan_alat jika migrasi dibatalkan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerusakan_alat');  // Menghapus tabel kerusakan_alat
    }
};
