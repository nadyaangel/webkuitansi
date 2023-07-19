<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kuitansi</title>
</head>
<body>
    <h1>Kuitansi</h1>

    <p>Nama Pengirim: {{ $kuitansi->nama_pengirim}}</p>
    <p>Jumlah Uang: {{ $kuitansi->jumlah_uang }}</p>
    <p>Tujuan Pembayaran: {{ $kuitansi->tujuan_pembayaran }}</p>
</body>
</html>
