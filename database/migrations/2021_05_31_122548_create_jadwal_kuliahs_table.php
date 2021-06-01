<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_mkul');
            $table->string('nama_mkul');
            $table->string('kd_dosen');
            $table->time('jam');
            $table->string('ruang_kelas');
            $table->integer('jumlah_mhs');
            $table->date('tanggal_mulai');
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
        Schema::dropIfExists('jadwal_kuliahs');
    }
}
