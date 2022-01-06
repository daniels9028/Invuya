<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKomoditasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komoditas',function(Blueprint $table)
        {
            $table->integer('id_petambak')->unsigned()->after('min_order');
            $table->foreign('id_petambak')->references('id_petambak')->on('petambak')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komoditas',function(Blueprint $table)
        {
            $table->dropForeign('id_petambak');
        });
    }
}
