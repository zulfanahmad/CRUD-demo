<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferensiBahasasTable extends Migration
{
    public function up()
    {
        Schema::create('referensi_bahasas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahasa');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referensi_bahasas');
    }
};

