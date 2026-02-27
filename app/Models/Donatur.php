<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $fillable = [
        'nama',
        'email',
        'no_hp'
    ];

    // Relasi: 1 donatur bisa punya banyak donasi
    public function donasi()
    {
        return $this->hasMany(Donasi::class);
    }
}
