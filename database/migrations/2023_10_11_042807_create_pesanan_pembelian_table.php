<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananPembelianTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan_pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pesanan');
            $table->date('tanggal_pesanan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan_pembelian');
    }
};



