<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->string('nama_ayah', 50)->nullable();
            $table->string('pekerjaan_ayah', 50)->nullable();
            $table->string('nama_ibu', 50)->nullable();
            $table->string('pekerjaan_ibu', 50)->nullable();
            $table->string('telepon_wali', 20)->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('nama_pasangan', 50)->nullable();
            $table->string('nama_anak', 50)->nullable();
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
        Schema::dropIfExists('data_keluarga');
    }
}
