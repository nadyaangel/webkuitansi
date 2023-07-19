<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuitansi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pengirim', 'jumlah_uang', 'tujuan_pembayaran'];
    public $timestamps = true;
}
