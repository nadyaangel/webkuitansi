<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <title>Invoice</title>
       @vite('resources/css/app.css')
        
    </head>
<body>
    @include('navbar')
    <h2 class="text-center font-bold mt-5">Invoice Pembelian</h2>

    <div class="shadow-md mx-32 my-10 px-5 py-3">
        <p class="mx-5 mb-2">No : {{ $pembelian->id }}</p>
        <p class="mx-5 mb-2 ">Bill To : {{ $pembelian->nama }}</p>
        <p class="mx-5">Tanggal : {{ $pembelian->created_at->format('d-m-Y') }}</p>

    </div>

    
<div class="max-md:mx-10 mx-32 relative rounded-lg shadow overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-l-lg ">
                  No
                </th>
                <th scope="col" class="px-6 py-3 rounded-l-lg">
                    Keterangan
                </th>
                
                <th scope="col" class="px-6 py-3 rounded-r-lg ">
                    Biaya
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                </th>
                
                <td class="px-6 py-4">
                   {{$pembelian->keterangan}}
                </td>
                <td class="px-6 py-4">
                    
                  
                </td>
            </tr>
            @foreach($pembelian->barang as $barang)

            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$barang->nama_produk}}
                </th>
               
                <td class="px-6 py-4">
                    {{'Rp' . number_format($barang->harga_satuan, 2, ',', '.')}}
                   
                </td>
            </tr>
            
           @endforeach
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" class="px-6 py-3 text-base"></th>
                <th scope="row" class="px-6 py-3 text-base">Total</th>

                <td class="px-6 py-3">
                    {{'Rp' . number_format($pembelian->total_harga, 2, ',', '.')}}
                </td>
            </tr>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" colspan="3" class="px-6 py-3 text-center text-base">
                    {{$pembelian->jumlah_uang_terbilang}} Rupiah
                </th>
          
            </tr>
        </tfoot>
     
    </table>
</div>

<div class="mx-32 my-10 shadow-md px-5 py-5">
    <h1>No. Rek BCA     : 021 2362 555</h1>
    <h1>No. Rek BNI     : 8373 88 3888</h1>
    <h1>No. Rek Mandiri : 112 0088 8588 78</h1>
    <h1>a.n David</h1>

</div>
<div class="my-10 flex justify-center">

    <a href="{{ route('printInvoice', ['id' => $pembelian->id])}}" class="shadow mt-10 max-md:w-2/3 text-center bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Cetak Invoice</a>
</div>
</body>
</html>