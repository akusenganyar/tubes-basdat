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
        Schema::create('perhotelans', function (Blueprint $table) {
            $table->id('id_perhotelan');
            $table->bigInteger('pemesanan_id');
            $table->string('nama_hotel');
            $table->string('jenis_kamar');
            $table->integer('jumlah_kamar');
            $table->date('tanggal_check_in');
            $table->date('tanggal_check_out');
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
        Schema::dropIfExists('perhotelans');
    }
};
