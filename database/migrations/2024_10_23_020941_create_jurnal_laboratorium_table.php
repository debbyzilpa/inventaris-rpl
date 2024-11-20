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
    Schema::create('jurnal_laboratorium', function (Blueprint $table) {
        $table->id();
        $table->string('hari', 15);
        $table->date('tgl');
        $table->string('mapel', 100);
        $table->string('kelas', 50);
        $table->text('materi_kegiatan')->nullable();
        $table->text('kejadian')->nullable();
        $table->string('guru', 100);
        $table->string('paraf', 100)->nullable();
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
        Schema::dropIfExists('jurnal_laboratorium');
    }
};
