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
            <th class="px-5">Jumlah</th>
            <th class="px-5">Harga Satuan</th>
            <th class="px-5">Subtotal</th>
        </tr>

        @foreach($pembelian->barang as $barang)
        <tr class="border">
            <td class="text-center">{{$barang ->nama_produk}}</td>
            <td>{{$barang->jumlah}}</td>
            <td>{{$barang->harga_satuan}}</td>
            <td>{{$barang->jumlah* $barang->harga_satuan}}</td>
        </tr>
        @endforeach
    </table>
    <p>Total Harga: {{$pembelian->total_harga}}</p>
</body>
</html>