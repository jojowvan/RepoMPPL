<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::defaultStringLength(191);
      Schema::create('siswa', function (Blueprint $table) {
          $table->increments('id_siswa');
          $table->string('nama_siswa');
          $table->integer('nisn')->unique();
          $table->integer('tahun_masuk');
          $table->string('alamat');
          $table->string('no_hp_ortu');
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
        Schema::dropIfExists('siswa');
    }
}
