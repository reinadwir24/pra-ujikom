<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasKoperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_koperasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_petugas');
            $table->string('nama');
            $table->text('alamat');
            $table->bigInteger('no_tlp');
            $table->string('tmp_lhr');
            $table->bigInteger('tgl_lhr');
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
        Schema::dropIfExists('petugas_koperasis');
    }
}
