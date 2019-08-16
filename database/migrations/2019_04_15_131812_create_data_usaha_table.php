<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_usaha', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->unsignedInteger('id_jenis_usaha')->nullable();
            $table->enum('lama_usaha', ['1', '2', '3', '4'])->nullable();
            $table->enum('status', ['1', '2', '3'])->nullable();
            $table->enum('modal', ['1', '2', '3'])->nullable();
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
        Schema::dropIfExists('data_usaha');
    }
}
