<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use PDF;

class PembelianController extends Controller
{
    //
    public function showFormPembelian(){
        return view('invoiceform');
    }
    public function convertToWords($number)
    {
    $words = ["", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas"];

    if ($number < 12) {
        return $words[$number];
    } elseif ($number < 20) {
        return $words[$number - 10] . " Belas";
    } elseif ($number < 100) {
        return $words[floor($number / 10)] . " Puluh " . $words[$number % 10];
    } elseif ($number < 200) {
        return "Seratus " . $this->convertToWords($number % 100);
    } elseif ($number < 1000) {
        return $words[floor($number / 100)] . " Ratus " . $this->convertToWords($number % 100);
    } elseif ($number < 2000) {
        return "Seribu " . $this->convertToWords($number % 1000);
    } elseif ($number < 1000000) {
        return $this->convertToWords(floor($number / 1000)) . " Ribu " . $this->convertToWords($number % 1000);
    } elseif ($number < 1000000000) {
        return $this->convertToWords(floor($number / 1000000)) . " Juta " . $this->convertToWords($number % 1000000);
    } elseif ($number < 1000000000000) {
        return $this->convertToWords(floor($number / 1000000000)) . " Miliar " . $this->convertToWords($number % 1000000000);
    } else {
        return "Angka terlalu besar";
    }
}

    public function getAllPembelian(Request $request){
        $userId = Auth::id();
        $pembelian = Pembelian::where('user_id', $userId)->get();


        return view('daftarpembelian', ['pembelian' => $pembelian]);
    }
    public function processForm(Request $request){
        try{
        $data = $request->validate([
            'nama' => 'required|string',
            'keterangan' => 'required|string',
            'barang' => 'required|array',
            'barang.*.nama_produk' => 'required|string',
            // 'barang.*.jumlah' => 'required|integer|min:1',
            'barang.*.harga_satuan' => 'required|numeric|min:0'
        ]);

        $userId = Auth::id();
       
        $pembelian = Pembelian::create([
            'user_id' => $userId,
            'nama' => $data['nama'],
            'keterangan' => $data['keterangan'],
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

        if($data['total_harga'] == 0){
            $data['jumlah_uang_terbilang'] = 'Nol';
        } else {
            $data['jumlah_uang_terbilang'] = $this->convertToWords($data['total_harga']);
        }
        session(['pembelian_id' => $pembelian->id]);

        return redirect()->route('detailPembelian', ['id' => $pembelian->id])->with('success', 'Pembelian berhasil ditambahkan'); }
        catch(\Exception $e){
            dd($e->getMessage());
        }


    }

    public function printInvoice($id){
        $pembelian = Pembelian::findOrFail($id);
        if($pembelian->total_harga == 0){
            $pembelian->jumlah_uang_terbilang = 'Nol';
        } else {
            $pembelian->jumlah_uang_terbilang = $this->convertToWords($pembelian->total_harga);
        }
        $pdf = PDF::loadView('invoicepembelian', compact('pembelian'));
        return $pdf->download('invoice.pdf');
    }

    public function showDetail($id){
        $pembelian = Pembelian::findOrFail($id);
        if($pembelian->total_harga == 0){
            $pembelian->jumlah_uang_terbilang = 'Nol';
        } else {
            $pembelian->jumlah_uang_terbilang = $this->convertToWords($pembelian->total_harga);
        }
        return view('invoice', compact('pembelian'));
    }
}
