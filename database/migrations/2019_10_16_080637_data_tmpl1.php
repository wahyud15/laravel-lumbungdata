<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTmpl1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatmpl1', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_indikator');
            $table->string('tahun');
            $table->integer('nu_karakteristik');
            $table->integer('nu_baris');
            $table->integer('nu_periode');
            $table->string('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
