<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Kuitansi</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <h1 class="text-center font-bold">Daftar Kuitansi</h1>
    <table class="ml-20 w-3/4 my-10 text-sm text-left shadow-md">
        <thead class="bg-blue-500 text-white">
            <tr class="sm: px-2">
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th>
                    Sudah diterima dari
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    Jumlah Pembayaran
                </th>
            </tr>
        </thead>
        @foreach($kuitansi as $item => $s)
        <tbody>
            <tr>
                <td scope="row" class="px-6 py-4 font-medium">
                    {{($kuitansi->firstItem()+$item)}}
                </td>
                <td scope="row" class=" py-4 font-medium">
                    {{$s->nama_pengirim}}
                </td>
                <td scope="row" class="py-4 font-medium">{{$s->created_at}}</td>
                <td scope="row" class="py-4 font-medium">
                    {{'Rp' . number_format($s->jumlah_uang, 2, ',', '.')}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>