<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';

    protected $fillable = [
        'donatur_id',
        'tujuan_donasi_id',
        'tanggal_donasi',
        'status'
    ];

    // Relasi ke Donatur

    public function donatur()
{
    return $this->belongsTo(
        Donatur::class,
        'donatur_id',
        'id'
    );
}

public function tujuanDonasi()
{
    return $this->belongsTo(
        TujuanDonasi::class,
        'tujuan_donasi_id', // FK di donasi
        'id'                // PK di tujuan_donasi
    );
}

public function items()
{
    return $this->hasMany(
        DonasiItem::class,
        'donasi_id',
        'id'
    );
}

}
