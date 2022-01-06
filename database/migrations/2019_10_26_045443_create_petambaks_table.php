<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetambaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petambak', function (Blueprint $table) {
            $table->increments('id_petambak');
            $table->string('nama',60);
            $table->string('alamat',60);
            $table->enum('gender',['L','P']);
            $table->string('no_telp',15);
            $table->string('foto_ktp',200);
            $table->date('tanggal_lahir');
            $table->string('email',55);
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
        Schema::drop('petambak');
    }
}
