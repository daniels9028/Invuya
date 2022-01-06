<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomoditasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditas', function (Blueprint $table) {
            $table->increments('id_komoditas');
            $table->string('nama_komoditas',155);
            $table->mediumInteger('harga');
            $table->string('foto',55);
            $table->string('tipe',55)->nullable();
            $table->bigInteger('ukuran')->nullable();
            $table->integer('min_order')->nullable();
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
        Schema::drop('komoditas');
    }
}
