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
        Schema::create('pembayaran_atas_pembelians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klien_id'); 
            $table->decimal('jumlah', 10, 2);
            $table->date('tanggal_pembayaran');
            $table->timestamps();
            
            // Menghubungkan pembayaran dengan klien
            $table->foreign('klien_id')
                ->references('id')
                ->on('kliens')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_atas_pembelians');
    }
};

