<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsurans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_angsuran');
            $table->bigInteger('id_katagori');
            $table->bigInteger('id_anggota');
            $table->bigInteger('tgl_pembayaran');
            $table->string('angsuran_ke');
            $table->bigInteger('besar_angsuran');
            $table->string('ket');
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
        Schema::dropIfExists('angsurans');
    }
}
