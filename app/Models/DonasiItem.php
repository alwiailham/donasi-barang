<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonasiItem extends Model
{
    use HasFactory;

    protected $table = 'donasi_items';

    protected $fillable = [
        'donasi_id',
        'nama_barang',
        'jumlah',
        'satuan',
        'kondisi',
        'gambar'
    ];

    // Relasi ke Donasi

    public function donasi()
{
    return $this->belongsTo(
        Donasi::class,
        'donasi_id', // FK di donasi_items
        'id'         // PK di donasi
    );
}

}
