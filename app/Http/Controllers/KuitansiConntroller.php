<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class KuitansiConntroller extends Controller
{
    public function showForm(){
        return view('kuitansiform');
    }

    public function generateKuitansi(Request $request){
        $data = $request->validate([
            'nama_pengirim' => 'required|string',
            'jumlah_uang' => 'required|numeric|min:0',
            'tujuan_pembayaran' => 'required|string',
        ]);

        $pdf = PDF::loadView('kuitansipdf', compact('data'));
        return $pdf->download('kuitansi.pdf');
    }
}
