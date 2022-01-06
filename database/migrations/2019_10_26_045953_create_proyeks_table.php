<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->increments('id_proyek');
            $table->string('nama_proyek',155);
            $table->bigInteger('total_lot');
            $table->string('gambar',55)->nullable();
            $table->string('prospektus',55)->nullable();
            $table->bigInteger('roi');
            $table->string('lokasi',155);
            $table->date('tanggal_mulai_p');
            $table->date('tanggal_selesai_p');
            $table->date('tanggal_selesai');
            $table->string('proposal_usaha',55)->nullable();
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
        Schema::drop('proyek');
    }
}
