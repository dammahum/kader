->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTarbiyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tarbiyah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->string('nama_halaqoh')->nullable();
            $table->unsignedInteger('id_jenjang_tarbiyah')->nullable();
            $table->string('nama_murabbi')->nullable();
            $table->string('tempat_tarbiyah')->nullable();
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
        Schema::dropIfExists('data_tarbiyah');
    }
}
