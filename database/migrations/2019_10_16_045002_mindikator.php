<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mindikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mindikator', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_indikator');
            $table->text('deskripsi_indikator')->nullable();
            $table->text('keterangan_indikator')->nullable();
            $table->bigInteger('mbaris_id');
            $table->bigInteger('mkarakteristik_id');
            $table->bigInteger('mperiode_id');
            $table->bigInteger('msatuan_id');
            $table->bigInteger('msubjek_id');
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
