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
            $table->char('kode_rayon', 3);
            $table->bigInteger('siswa_id')->unsigned();
            $table->string('pelajaran');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('sekolah_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('CASCADE');
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
