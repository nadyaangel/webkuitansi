<!DOCTYPE html>
<html>
<head>
    <title>Detail Kuitansi</title>
    @vite('resources/css/app.css')
    <style>
        /* Tambahkan CSS sesuai kebutuhan untuk menghias halaman detail kuitansi */
    </style>
</head>
<body>
    <h2 class="text-center font-bold mt-5">Detail Kuitansi</h2>

    <table>
        <tr>
            <td>Sudah terima dari:</td>
            <td>{{ $kuitansi->nama_pengirim }}</td>
        </tr>
        <tr>
            <td>Uang sejumlah:</td>
            <td>Rp{{number_format( $kuitansi->jumlah_uang, 0) }} </td>
        </tr>
        <tr>
            <td>Terbilang:</td>
            <td>{{$kuitansi ->jumlah_uang_terbilang}} Rupiah</td>
        </tr>
        <tr>
            <td>Untuk Pembayaran:</td>
            <td>{{ $kuitansi->tujuan_pembayaran }}</td>
        </tr>
        <tr>
            <td>Tanggal Dibuat:</td>
            <td>{{ $kuitansi->created_at }}</td>
        </tr>
    </table>

    <a href="{{ route('printKuitansi', ['id' => $kuitansi->id])}}" class="bg-blue-700 text-white rounded-md px-2 py-1 mx-5">Cetak Kuitansi</a>
    
</body>
</html>
