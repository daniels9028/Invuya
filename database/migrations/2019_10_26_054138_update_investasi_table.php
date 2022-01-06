<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInvestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investasi',function(Blueprint $table)
        {
            $table->integer('id_investor')->unsigned()->after('jumlah_lot');
            $table->foreign('id_investor')->references('id_investor')->on('investor')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_proyek')->unsigned()->after('id_investor');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investasi',function(Blueprint $table)
        {
            $table->dropForeign('id_investor');
            $table->dropForeign('id_proyek');
        });
    }
}
