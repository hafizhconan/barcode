<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tgl_pinjam');
            $table->integer('kode');
            $table->string('nis');
            $table->string('nama_guru');
            $table->string('lama_pinjam');
            $table->string('tgl_kembali');
            $table->integer('denda');
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
        Schema::dropIfExists('peminjamens');
    }
}
