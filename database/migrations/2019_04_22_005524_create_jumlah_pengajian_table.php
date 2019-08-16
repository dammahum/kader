<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJumlahPengajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_pengajian', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->integer('dirosa')->nullable();
            $table->integer('majelis_taklim')->nullable();
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
        Schema::dropIfExists('jumlah_pengajian');
    }
}
