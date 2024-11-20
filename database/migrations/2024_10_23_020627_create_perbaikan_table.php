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
    Schema::create('perbaikan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_alat')->constrained('inventaris');
        $table->date('tgl_perbaikan');
        $table->text('keterangan')->nullable();
        $table->string('paraf_teknisi', 100)->nullable();
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
        Schema::dropIfExists('perbaikan');
    }
};
