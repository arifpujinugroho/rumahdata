<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_kk');
            $table->string('nik_keluarga')->nullable();
            $table->string('nama_keluarga')->nullable();
            $table->string('status_keluarga')->nullable();
            $table->enum('jns_kel',['L','P'])->nullable();
            $table->string('tempatlahir')->nullable();
            $table->string('tanggallahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jns_kerja')->nullable();
            $table->string('warganegara')->nullable();
            $table->string('status_perkawinan')->nullable();
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
        Schema::dropIfExists('keluarga');
    }
}
