<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pembelian</title>
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
                    Nama Pembeli
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    Jumlah Pembelian
                </th>
            </tr>
        </thead>
        @foreach($pembelian as $item => $s)
        <tbody>
            <tr>
                <th>
                    {{($pembelian->firstItem()+$item)}}
                </th>
                <th>
                    {{$s->nama}}
                </th>
                <td>{{$s->created_at}}</td>
                <td>
                    {{$s->total_harga}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>