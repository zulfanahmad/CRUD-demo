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
        Schema::create('penawaran_jasas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klien_id'); // Menyimpan ID klien yang menerima penawaran
            $table->unsignedBigInteger('pekerjaan_id'); // Menyimpan ID pekerjaan yang ditawarkan
            $table->text('deskripsi'); // Menyimpan deskripsi penawaran
            $table->decimal('harga', 10, 2); // Menyimpan harga penawaran dalam format uang
            $table->timestamps();
            
            // Menghubungkan penawaran jasa dengan klien
            $table->foreign('klien_id')
                ->references('id')
                ->on('kliens')
                ->onDelete('cascade');
            
            // Menghubungkan penawaran jasa dengan pekerjaan
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
        Schema::dropIfExists('penawaran_jasas');
    }
};

