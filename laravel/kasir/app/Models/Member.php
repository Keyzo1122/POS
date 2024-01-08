<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $guarded = [];
    // protected $fillable = ['id_produk', 'kode_produk', 'nama_produk', 'nama_kategori', 'merk', 'harga_beli', 'harga_jual', 'diskon', 'stok'];
}
