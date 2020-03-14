<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sekolah_id')->unsigned();
            $table->string('name');
            $table->string('hari');
            $table->string('pelajaran');
            $table->string('no_peserta');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('sekolah_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadirans');
    }
}
