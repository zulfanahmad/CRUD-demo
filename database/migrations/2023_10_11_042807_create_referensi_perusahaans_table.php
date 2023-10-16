<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferensiPerusahaansTable extends Migration
{
    public function up()
    {
        Schema::create('referensi_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perusahaan_id');
            $table->string('akun_bank');
            $table->string('alamat_email');
            $table->string('nomor_telepon');
            $table->string('alamat_kantor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referensi_perusahaans');
    }
};


