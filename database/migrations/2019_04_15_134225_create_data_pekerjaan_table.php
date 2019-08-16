<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->unsignedInteger('id_status_pekerjaan');
            $table->string('jabatan', 50)->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('data_pekerjaan');
    }
}
