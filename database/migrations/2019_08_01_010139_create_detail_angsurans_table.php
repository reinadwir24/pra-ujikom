<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAngsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_angsurans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_angsuran');
            $table->bigInteger('tgl_jatuh_tempo');
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
        Schema::dropIfExists('detail_angsurans');
    }
}
