<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('pemesanan',function(Blueprint $table)
        // {
        //     $table->integer('id_komoditas')->unsigned()->after('tanggal_pesan');
        //     $table->foreign('id_komoditas')->references('id_komoditas')->on('komoditas')->onDelete('cascade')->onUpdate('cascade');            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('pemesanan',function(Blueprint $table)
        // {
        //     $table->dropForeign('id_komoditas');
        // });
    }
}
