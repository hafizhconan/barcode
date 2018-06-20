<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nim');
            $table->string('tgl_daftar');
            $table->string('id_line');
            $table->string('no_hp');
            $table->string('email');
            $table->longText('contentQR');
            $table->string('status1');
            $table->string('status2');
            $table->string('acc');
            $table->string('delete_by');
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
        Schema::dropIfExists('backups');
    }
}
