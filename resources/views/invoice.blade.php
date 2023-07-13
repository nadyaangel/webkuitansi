<html lang="en">
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    @vite('resource/css/app.css')
</head>
<body>
    <h2>Invoice Pembelian</h2>

    <h3>Nama : {{ $pembelian->nama }}</h3>

    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>

        @foreach($pembelian->barang as $barang)
        <tr>
            <td>{{$barang ->nama_produk}}</td>
            <td>{{$barang->jumlah}}</td>
            <td>{{$barang->harga_satuan}}</td>
            <td>{{$barang->jumlah* $barang->harga_satuan}}</td>
        </tr>
        @endforeach
    </table>
    <p>Total Harga: {{$pembelian->total_harga}}</p>
</body>
</html>