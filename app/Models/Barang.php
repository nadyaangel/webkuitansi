<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_produk', 'harga_satuan'];
    protected $table = 'barang';
    public function pembelian(){
        return $this->belongsTo(Pembelian::class);
    }
}
