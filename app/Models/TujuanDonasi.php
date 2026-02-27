<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanDonasi extends Model
{
    use HasFactory;

    protected $table = 'tujuan_donasi';

    protected $fillable = [
        'nama_tujuan',
        'deskripsi',
        'gambar',
        'status'
    ];

    // Relasi: 1 tujuan punya banyak donasi
    public function donasi()
    {
        return $this->hasMany(Donasi::class);
    }
}
