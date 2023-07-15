<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PembelianController extends Controller
{
    //
    public function processForm(Request $request){
        $data = $request->validate([
            'nama' => 'required|string',
            'barang' => 'required|array',
            'barang.*.nama_produk' => 'required|string',
            'barang.*.jumlah' => 'required|integer|min:1',
            'barang.*.harga_satuan' => 'required|numeric|min:0'
        ]);

        $pembelian = Pembelian::create([
            'nama' => $data['nama'],
            'total_harga' => 0
        ]);

        $totalHarga = 0;
        foreach($data['barang'] as $barangData){
            $barang = new Barang([
                'nama_produk' => $barangData['nama_produk'],
                'jumlah' => $barangData['jumlah'],
                'harga_satuan' => $barangData['harga_satuan']
            ]);

            $pembelian->barang()->save($barang);
            $totalHarga += ($barangData['jumlah'] * $barangData['harga_satuan']);

        }
        $pembelian->total_harga = $totalHarga;
        $pembelian->save();

        return redirect('/pembelian')->with('success', 'Pembelian berhasil ditambahkan');

    }

    public function printInvoice($id){
        $pembelian = Pembelian::findOrFail($id);
        $pdf = PDF::loadView('pembelian.invoice', compact('pembelian'));
        return $pdf->download('invoice.pdf');
    }
}
