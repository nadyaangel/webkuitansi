<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Barang;
use PDF;

class PembelianController extends Controller
{
    //
    public function showFormPembelian(){
        return view('invoiceform');
    }

    public function getAllPembelian(Request $request){
        $pembelian = Pembelian::query();

        $pembelian = $pembelian->paginate(10);

        return view('daftarpembelian', ['pembelian' => $pembelian]);
    }
    public function processForm(Request $request){
        try{
        $data = $request->validate([
            'nama' => 'required|string',
            'barang' => 'required|array',
            'barang.*.nama_produk' => 'required|string',
            // 'barang.*.jumlah' => 'required|integer|min:1',
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
                // 'jumlah' => $barangData['jumlah'],
                'harga_satuan' => $barangData['harga_satuan']
            ]);

            $pembelian->barang()->save($barang);
            $totalHarga += ($barangData['harga_satuan']);

        }
        $pembelian->total_harga = $totalHarga;
        $pembelian->save();

        session(['pembelian_id' => $pembelian->id]);

        return redirect()->route('detailPembelian', ['id' => $pembelian->id])->with('success', 'Pembelian berhasil ditambahkan'); }
        catch(\Exception $e){
            dd($e->getMessage());
        }


    }

    public function printInvoice($id){
        $pembelian = Pembelian::findOrFail($id);
        $pdf = PDF::loadView('invoicepembelian', compact('pembelian'));
        return $pdf->download('invoice.pdf');
    }

    public function showDetail($id){
        $pembelian = Pembelian::findOrFail($id);
        return view('invoice', compact('pembelian'));
    }
}
