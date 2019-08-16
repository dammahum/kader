<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatTarbiyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_tarbiyah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_jenjang_tarbiyah')->nullable();
            $table->year('tahun')->nullable();
            $table->string('murabbi')->nullable();
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
        Schema::dropIfExists('riwayat_tarbiyah');
    }
}
