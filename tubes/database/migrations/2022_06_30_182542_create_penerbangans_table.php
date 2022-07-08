<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbangans', function (Blueprint $table) {
            $table->id('id_penerbangan');
            $table->bigInteger('pemesanan_id');
            $table->string('nama_penerbangan');
            $table->integer('jumlah_penumpang');
            $table->string('asal_keberangkatan');
            $table->string('tujuan_keberangkatan');
            $table->date('tanggal_keberangkatan');
            $table->string('kelas_penerbangan');
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
        Schema::dropIfExists('penerbangans');
    }
};
