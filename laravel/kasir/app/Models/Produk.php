<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $guard = [];
    protected $fillable = ['id_produk', 'kode_produk', 'nama_produk', 'nama_kategori', 'merk', 'harga_beli', 'harga_jual', 'diskon', 'stok'];
}
