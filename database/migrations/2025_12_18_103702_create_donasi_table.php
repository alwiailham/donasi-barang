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
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('donatur_id')
                  ->constrained('donatur')
                  ->onDelete('cascade');

            $table->foreignId('tujuan_donasi_id')
                  ->constrained('tujuan_donasi')
                  ->onDelete('cascade');

            $table->date('tanggal_donasi');

            $table->enum('status', ['menunggu', 'diterima', 'disalurkan'])
                  ->default('menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi');
    }
};
