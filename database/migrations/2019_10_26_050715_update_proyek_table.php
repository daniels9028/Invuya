<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyek',function(Blueprint $table)
        {
            $table->integer('id_petambak')->unsigned()->after('proposal_usaha');
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
         Schema::table('proyek',function(Blueprint $table)
        {
            $table->dropForeign('id_petambak');
        });
    }
}
