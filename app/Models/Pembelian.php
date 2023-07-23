<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = ['nama', 'total_harga'];
    protected $table = 'pembelian';
    public function barang() {
        return $this->hasMany(Barang::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
