<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Form Kuitansi</title>
</head>
<body>
    <h1>Form Kuitansi</h1>

    <form method="POST" action="{{ route('kuitansi.generate') }}">
        @csrf
        <div>
            <label for="nama_pengirim">Nama Pengirim:</label>
            <input type="text" name="nama_pengirim" required>
        </div>
        <div>
            <label for="jumlah_uang">Jumlah Uang:</label>
            <input type="number" name="jumlah_uang" min="0" required>
        </div>
        <div>
            <label for="tujuan_pembayaran">Tujuan Pembayaran:</label>
            <input type="text" name="tujuan_pembayaran" required>
        </div>
        <button type="submit">Generate Kuitansi</button>
    </form>
</body>
</html>
