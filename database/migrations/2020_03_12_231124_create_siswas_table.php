<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sekolah_id')->unsigned();
            $table->char('kode_rayon', 3);
            $table->char('kode_sekolah', 7);
            $table->char('kode_studi', 7);
            $table->string('kode_peserta_sekolah');
            $table->string('no_peserta')->unique();
            $table->string('nisn')->unique();
            $table->string('no_induk')->unique();
            $table->string('name');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nama_ortu');
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
        Schema::dropIfExists('siswas');
    }
}
