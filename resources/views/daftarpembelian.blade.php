<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pembelian</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <h1 class="text-lg text-center my-5 font-semibold block uppercase">Daftar Invoice</h1>
    <div class="flex justify-center">
        <table class=" w-3/4 my-10 text-sm text-left shadow-md">
            <thead class="bg-blue-500 text-white">
                <tr class="sm: px-2">
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th>
                        Nama Pemilik Tagihan
                    </th>
                    <th>
                        Tanggal
                    </th>
                    <th>
                    
                        Jumlah Tagihan
                    </th>
                </tr>
            </thead>
            @foreach($pembelian as $item => $s)
            <tbody>
                <tr>
                    <td scope="row" class="px-6 py-4 font-medium">
                        {{$item + 1}}
                    </td>
                    <td scope="row" class=" py-4 font-medium">
                      <a href="/pembelian/{{$s->id}}/detail"> {{$s->nama}} </a> 
                    </td>
                    <td scope="row" class="py-4 font-medium">{{$s->created_at->format('d-m-Y')}}</td>
                    <td scope="row" class="py-4 font-medium">
                        {{'Rp' . number_format($s->total_harga, 2, ',', '.')}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
</body>
</html>