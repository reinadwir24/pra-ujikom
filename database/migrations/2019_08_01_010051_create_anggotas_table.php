<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_anggota');
            $table->string('nama');
            $table->text('alamat');
            $table->bigInteger('tgl_lhr');
            $table->string('tmp_lhr');
            $table->string('j_kel');
            $table->string('status');
            $table->bigInteger('no_tlp');
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
        Schema::dropIfExists('anggotas');
    }
}
