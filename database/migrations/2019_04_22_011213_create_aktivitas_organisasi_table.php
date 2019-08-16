<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAktivitasOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kader')->nullable();
            $table->enum('daurah_kaderisasi', ['1', '2', '3'])->nullable();
            $table->enum('daurah_qadha', ['1', '2', '3'])->nullable();
            $table->enum('daurah_sakinah', ['1', '2', '3'])->nullable();
            $table->enum('daurah_syariyyah', ['1', '2', '3'])->nullable();
            $table->enum('diklat_murabbi', ['A', 'B', 'C'])->nullable();
            $table->enum('diklat_dai_khatib', ['A', 'B', 'C'])->nullable();
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
        Schema::dropIfExists('aktivitas_organisasi');
    }
}
