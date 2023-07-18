<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <title>Invoice</title>
       {{-- @vite('resources/css/app.css') --}}
        
       <style>
        body {
        font-family: Calibri,  sans-serif;
        }
        .tabel{
            padding: 5pt 35pt 5pt 35pt; 
           border-collapse: collapse;
        }

        .tabel td{
            padding: 5pt 15pt 5pt 15pt;
        }
        .tabel th ,
        .tabel td{
        border: 1px solid black; /* Memberikan border pada seluruh sel tabel */
         /* Memberikan ruang antara teks dan border */
    }
       </style>
    </head>
<body>
    <h2 style="text-align: center">AGEN JNE & ATK DJAYA ABADHI</h3>
    <h2 style="text-align:center;">Invoice Pembelian</h2>

    <h3 class="" style="padding-left: 30pt">Nama : {{ $pembelian->nama }}</h3>
    <table class="tabel" style="margin-left: auto; margin-right: auto;  ">
        <tr class="" style="background-color: aquamarine">
            <th class="tabel">Nama Produk</th>
            <th class="tabel">Jumlah</th>
            <th class="tabel">Harga Satuan</th>
            <th class="tabel">Subtotal</th>
        </tr>

        @foreach($pembelian->barang as $barang)
        <tr class="">
            <td class="">{{$barang ->nama_produk}}</td>
            <td style="">{{$barang->jumlah}}</td>
            <td>{{$barang->harga_satuan}}</td>
            <td>{{$barang->jumlah* $barang->harga_satuan}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">
                Total Harga: {{$pembelian->total_harga}}
            </td>
        </tr>
    </table>

    <p style="text-align: end; margin:50px;">Toko Djaya Abadhi</p>
   
</body>
</html>