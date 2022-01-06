<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->string('nama_pemilik',155);
            $table->string('no_rekening',20);
            $table->string('jenis_bank',20);
            $table->string('bukti_transfer',55);
            $table->enum('status_bayar',['0','1']);
            $table->dateTime('tanggal_bayar')->useCurrent();
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
        Schema::drop('pembayaran');
    }
}
