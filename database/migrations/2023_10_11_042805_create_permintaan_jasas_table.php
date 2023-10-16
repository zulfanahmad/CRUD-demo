<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permintaan_jasas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klien_id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->text('deskripsi'); 
            $table->timestamps();
            
            // Menghubungkan permintaan jasa dengan klien
            $table->foreign('klien_id')
                ->references('id')
                ->on('kliens')
                ->onDelete('cascade');
            
            // Menghubungkan permintaan jasa dengan pekerjaan
            $table->foreign('pekerjaan_id')
                ->references('id')
                ->on('pekerjaans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_jasas');
    }
};

