<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'namaBar',
        'harga',
        'stok',
    ];
    protected $guarded = [
        'id',
    ];
}
