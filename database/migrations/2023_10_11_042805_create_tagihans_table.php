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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klien_id'); 
            $table->unsignedBigInteger('proyek_id');
            $table->decimal('jumlah', 10, 2); 
            $table->date('tanggal_tagihan'); 
            $table->timestamps();
            
            // Menghubungkan tagihan dengan klien
            $table->foreign('klien_id')
                ->references('id')
                ->on('kliens')
                ->onDelete('cascade');
            
            // Menghubungkan tagihan dengan proyek
            $table->foreign('proyek_id')
                ->references('id')
                ->on('proyeks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};

