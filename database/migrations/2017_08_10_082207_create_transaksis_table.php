<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('jumlah');
            $table->date('tanggal_transaksi');
            $table->timestamps();


            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            
            $table->foreign('jenis_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('karyawan_id')->references('id')->on('transaksis')->onUpdate('cascade')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
