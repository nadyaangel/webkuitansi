<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kuitansi</title>
</head>
<body>
    <h1>Kuitansi</h1>

    <p>Nama Pengirim: {{ $data['nama_pengirim'] }}</p>
    <p>Jumlah Uang: {{ $data['jumlah_uang'] }}</p>
    <p>Tujuan Pembayaran: {{ $data['tujuan_pembayaran'] }}</p>
</body>
</html>
