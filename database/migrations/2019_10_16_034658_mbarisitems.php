<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mbarisitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbarisitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_urut');
            $table->string('nama_items');
            $table->bigInteger('id_baris');
            $table->string('nama_baris');
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
