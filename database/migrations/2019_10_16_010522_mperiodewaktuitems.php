<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mperiodewaktuitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mperiodewaktuitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_urut');
            $table->string('nama_items');
            $table->bigInteger('mperiodewaktu_id');
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
