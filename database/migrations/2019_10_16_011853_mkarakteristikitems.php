<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mkarakteristikitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mkarakteristikitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_urut');
            $table->string('nama_items');
            $table->bigInteger('id_karakteristik');
            $table->string('nama_karakteristik');
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
