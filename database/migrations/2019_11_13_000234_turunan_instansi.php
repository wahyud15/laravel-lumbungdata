<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TurunanInstansi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turunaninstansi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_instansi');
            $table->bigInteger('minstansi_id');
            $table->bigInteger('madministrativelevel_id');
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
