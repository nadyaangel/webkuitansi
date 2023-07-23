<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Form Kuitansi</title>
</head>
<body>
    @include('navbar')
    <h1 class="font-bold">Form Kuitansi</h1>

    <form method="POST" action="{{ route('kuitansi.generate') }}">
        @csrf
        <div>
            <label for="nama_pengirim">Sudah terima dari:</label>
            <input type="text" class="rounded-md" name="nama_pengirim" required>
        </div>
        <div>
            <label for="jumlah_uang">Jumlah Uang:</label>
            <input type="number" name="jumlah_uang" class="rounded-md" min="0" required>
        </div>
        <div>
            <label for="tujuan_pembayaran">Tujuan Pembayaran:</label>
            <input type="text" class="rounded-md" name="tujuan_pembayaran" required>
        </div>
        <button class="ml-5 bg-blue-600 text-white px-3 py-1 rounded-md" type="submit">Generate Kuitansi</button>
    </form>
</body>
</html>
