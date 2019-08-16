<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->string('sd', 50)->nullable();
            $table->string('sltp', 50)->nullable();
            $table->string('slta', 50)->nullable();
            $table->string('pt_d3', 60)->nullable();
            $table->string('pt_s1', 60)->nullable();
            $table->string('pt_s2', 60)->nullable();
            $table->string('pt_s3', 60)->nullable();
            $table->string('jurusan_slta', 30)->nullable();
            $table->string('pendidikan_s1', 50)->nullable();
            $table->string('pendidikan_s2', 50)->nullable();
            $table->string('pendidikan_s3', 50)->nullable();
            $table->string('kursus')->nullable();
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
        Schema::dropIfExists('data_pendidikan');
    }
}
