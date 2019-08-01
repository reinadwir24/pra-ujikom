<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pinjaman');
            $table->string('nama_pinjaman');
            $table->bigInteger('id_anggota');
            $table->bigInteger('besar_pinjaman');
            $table->bigInteger('tgl_pengajuan_pinjaman');
            $table->bigInteger('tgl_acc_peminjam');
            $table->bigInteger('tgl_pinjaman');
            $table->bigInteger('tgl_pelunasan');
            $table->bigInteger('id_angsuran');
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
        Schema::dropIfExists('pinjamen');
    }
}
