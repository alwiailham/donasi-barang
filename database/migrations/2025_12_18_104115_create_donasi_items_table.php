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
    Schema::create('donasi_items', function (Blueprint $table) {
        $table->id();

        $table->foreignId('donasi_id')
              ->constrained('donasi')
              ->onDelete('cascade');

        $table->string('nama_barang');
        $table->integer('jumlah');
        $table->string('satuan'); // pcs, kg, dus
        $table->enum('kondisi', ['baru', 'layak_pakai']);
        $table->string('gambar')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_items');
    }
};
