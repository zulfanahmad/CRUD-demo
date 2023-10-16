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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_mulai');
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            
            $table->unsignedBigInteger('klien_id');
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
        Schema::dropIfExists('proyeks');
    }
};

