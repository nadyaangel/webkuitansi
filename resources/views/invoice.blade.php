<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <title>Invoice</title>
       @vite('resources/css/app.css')
        
    </head>
<body>
    <h2 class="text-center font-bold mt-5">Invoice Pembelian</h2>

    <h3 class="mx-5 my-10">Nama : {{ $pembelian->nama }}</h3>

    <table class="mx-5">
        <tr class="bg-slate-900 text-white">
            <th class="px-5">Nama Produk</th>
           
            <th class="px-5">Harga Satuan</th>
        </tr>

        @foreach($pembelian->barang as $barang)
        <tr class="border">
            <td class="text-center">{{$barang ->nama_produk}}</td>
        
            <td>{{$barang->harga_satuan}}</td>
           
        </tr>
        @endforeach
    </table>
    <p class="ml-5 my-5">Total Harga: {{$pembelian->total_harga}}</p>
    <a href="{{ route('printInvoice', ['id' => $pembelian->id])}}" class="bg-blue-700 text-white rounded-md px-2 py-1 mx-5">Cetak Invoice</a>
</body>
</html>