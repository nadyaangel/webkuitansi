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

    public function getAllKuitansi(Request $request){
        $kuitansi = Kuitansi::query();
        $kuitansi = $kuitansi->paginate(10);
        return view('daftarkuitansi', ['kuitansi' => $kuitansi]);
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


    public function generateKuitansi(Request $request){
        $data = $request->validate([
            'nama_pengirim' => 'required|string',
            'jumlah_uang' => 'required',
            'tujuan_pembayaran' => 'required|string',
        ]);

        if($data['jumlah_uang'] == 0){
            $data['jumlah_uang_terbilang'] = 'Nol';
        } else {
            $data['jumlah_uang_terbilang'] = $this->convertToWords($data['jumlah_uang']);
        }

        // $data['jumlah_uang_terbilang'] = $this->convertToWords($data['jumlah_uang']);
        $kuitansi = Kuitansi::create($data);

        return redirect()->route('kuitansi.detail', ['id' => $kuitansi->id])->with('success', 'Kuitansi berhasil ditambahkan');

       
    }

    public function showDetail($id){
        $kuitansi = Kuitansi::findOrFail($id);
        if($kuitansi->jumlah_uang == 0){
            $kuitansi->jumlah_uang_terbilang = 'Nol';
        } else {
            $kuitansi->jumlah_uang_terbilang = $this->convertToWords($kuitansi->jumlah_uang);
        }
        return view('kuitansidetail', compact('kuitansi'));
    }

    public function printKuitansi($id){
        $kuitansi = Kuitansi::findOrFail($id);
        $pdf = PDF::loadView('kuitansipdf', compact('kuitansi'));
        return $pdf->download('kuitansi.pdf');
    }
}
