<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tgl_kadaluarsa',
        'stok',
        'satuan',
        'harga_beli',
        'harga_jual'
    ];
}
