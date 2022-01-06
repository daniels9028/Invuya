<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor', function (Blueprint $table) {
            $table->increments('id_investor');
            $table->string('nama',55);
            $table->string('alamat',155);
            $table->string('no_telp',15)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('gender',['L','P']);
            $table->char('nik',16)->nullable();
            $table->string('foto',15)->nullable();
            $table->string('pekerjaan',50)->nullable();
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
        Schema::drop('investor');
    }
}
