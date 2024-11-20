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
    Schema::create('inventaris', function (Blueprint $table) {
        $table->id();
        $table->string('nama_alat', 100);
        $table->string('no_inventaris', 50)->unique();
        $table->text('spesifikasi')->nullable();
        $table->integer('jumlah');
        $table->enum('kondisi', ['Baik', 'Rusak', 'Butuh perbaikan']);
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
        Schema::dropIfExists('inventaris');
    }
};
