<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuitansi;
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

        $kuitansi = Kuitansi::create($data);

        return redirect()->route('kuitansi.detail', ['id' => $kuitansi->id])->with('success', 'Kuitansi berhasil ditambahkan');

       
    }

    public function showDetail($id){
        $kuitansi = Kuitansi::findOrFail($id);
        return view('kuitansidetail', compact('kuitansi'));
    }

    public function printKuitansi($id){
        $kuitansi = Kuitansi::findOrFail($id);
        $pdf = PDF::loadView('kuitansipdf', compact('kuitansi'));
        return $pdf->download('kuitansi.pdf');
    }
}
