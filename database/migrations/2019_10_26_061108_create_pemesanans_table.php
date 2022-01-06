<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pemesanan', function (Blueprint $table) {
        //     $table->increments('id_pemesanan');
        //     $table->string('nama',55);
        //     $table->string('no_telp',16);
        //     $table->integer('kuantitas');
        //     $table->string('lokasi',155);
        //     $table->string('email',155);
        //     $table->enum('status',['0','1']);
        //     $table->dateTime('tanggal_pesan')->useCurrent();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('pemesanan');
    }
}
