<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = ['user_id', 'nama', 'keterangan', 'total_harga'];
    protected $table = 'pembelian';
    protected $guarded = [];
    protected $dates = ['created_at'];
    public function barang() {
        return $this->hasMany(Barang::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
