<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiIndikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksiindikator', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_transaksi_indikator');
            $table->bigInteger('mindikator_id');
            $table->bigInteger('madministrativelevel_id');
            $table->bigInteger('user_id');
            $table->bigInteger('tahundata')->default(0000);
            $table->string('status_entri')->default('0');
            $table->string('status_tayang')->default('0');
            $table->timestamps();
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
