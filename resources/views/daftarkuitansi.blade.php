<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Kuitansi</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>
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
                <th>
                    {{($kuitansi->firstItem()+$item)}}
                </th>
                <th>
                    {{$s->nama_pengirim}}
                </th>
                <td>{{$s->created_at}}</td>
                <td>
                    {{$s->tujuan_pembayaran}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>