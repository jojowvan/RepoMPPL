<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anggaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('anggaran', function (Blueprint $table) {
        $table->increments('id_anggaran');
        $table->integer('id_staff');
        $table->string('nama_sarana');
        $table->integer('jumlah');
        $table->integer('harga');
        $table->integer('setuju')->nullable();
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
        Schema::dropIfExists('anggaran');
    }
}
