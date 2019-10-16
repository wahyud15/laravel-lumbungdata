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
            $table->text('deskripsi_indikator');
            $table->text('keterangan_indikator');
            $table->bigInteger('id_baris');
            $table->bigInteger('id_karakteristik');
            $table->bigInteger('id_periode');
            $table->bigInteger('id_satuan');
            $table->string('table_type');
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
