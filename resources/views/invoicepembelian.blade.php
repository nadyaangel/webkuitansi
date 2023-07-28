<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembelian</title>
    <style>
        body {
            font-family: Calibri,  sans-serif;
            line-height: 1.6;
        }

        .tabel{
            border-collapse: collapse; 
        }
        .tabel th ,
        .tabel td{
        border: 1px solid black; /* Memberikan border pada seluruh sel tabel */
         /* Memberikan ruang antara teks dan border */
    }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .mt-5 {
            margin-top: 1.25rem;
        }

        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .mx-32 {
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .my-5 {
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .max-md\:mx-10 {
            max-width: 2.5rem;
            margin-left: 0.625rem;
        }

        .relative {
            position: relative;
        }

        .rounded-lg {
            border-radius: 0.375rem;
        }

        .overflow-x-auto {
            overflow-x: auto;
        }

        .w-full {
            width: 100%;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-left {
            text-align: left;
        }

        .text-gray-500 {
            color: #6b7280;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .bg-gray-100 {
            background-color: #f3f4f6;
        }

        .dark {
            /* Dark mode styles (if applicable) */
        }

        .text-xs {
            font-size: 0.75rem;
        }

        .text-gray-700 {
            color: #374151;
        }

        .dark\:bg-gray-700 {
            background-color: #374151;
        }

        .dark\:text-gray-400 {
            color: #9ca3af;
        }

        .bg-white {
            background-color: #ffffff;
        }

      

        .font-medium {
            font-weight: 500;
        }

        .text-gray-900 {
            color: #111827;
        }

        .dark\:text-white {
            color: #ffffff;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .dark\:text-gray-900 {
            color: #111827;
        }

        .dark\:bg-gray-800 {
            background-color: #1f2937;
        }

        .dark\:text-white {
            color: #ffffff;
        }

        .dark\:text-gray-400 {
            color: #9ca3af;
        }

        .text-base {
            font-size: 1rem;
        }

        .dark\:text-center {
            text-align: center;
        }

        .shadow {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .dark\:text-base {
            font-size: 1rem;
        }

        .text-center {
            text-align: center;
        }

      


        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }


        .justify-center {
            justify-content: center;
        }

        .flex {
            display: flex;
        }

        .whitespace-nowrap {
            white-space: nowrap;
        }

       
    </style>
</head>

<body>
    <h3 style="display: block; text-transform:uppercase;" class="text-center font-bold mt-5">Invoice</h3>

        <table style="margin-left: 2rem">
            <tr>
                <td>
                    <div class="" style="flex-basis: 50%;">
                        <p><u><b>DAVID, S.H., M.Kn</b></u> <br>
                            Kantor Notaris <br>
                            Jl. Jenderal Ahmad Yani No. 58/170, 13 Ulu, <br>
                            Depan STIE AKUBANK Mulia Dharma Pratama <br>
                            Palembang, Sumatera Selatan 30263 <br>
                            Telepon: 0711 512 177 / 0811 781 506
                            <br>
                            Bill To : {{ $pembelian->nama }}
                        </p>
                        
                    </div>
                    
                </td>
                <td style="vertical-align: top;">
                    <div class="" style="padding-left:8rem;">
                        <p class=""> Tanggal: {{ $pembelian->created_at->format('d-m-Y') }} <br>
                            No : {{ $pembelian->id }} </p>
                        </div>

                </td>
            </tr>
        </table>

    
    

    <div class="max-md:mx-10 mx-32 relative rounded-lg shadow overflow-x-auto">
        <table class=" tabel w-full text-sm text-left ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" style="padding: 5pt 5pt 5pt 5pt" class="rounded-l-lg ">
                        No
                    </th>
                    <th scope="col" class="rounded-l-lg">
                        Keterangan
                    </th>
                    <th scope="col" class="rounded-r-lg ">
                        Biaya
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" style="padding: 5pt 5pt 5pt 5pt" class="">
                    </th>
                    <td style="padding: 5pt 5pt 5pt 5pt" class="">
                        {{ $pembelian->keterangan }}
                    </td>
                    <td class="">
                    </td>
                </tr>
                <?php $total = 0; ?>
                @foreach($pembelian->barang as $barang)
                    <?php $total += $barang->harga_satuan; ?>
                    <tr class="">
                        <td scope="row" style="padding: 5pt 5pt 5pt 5pt; font-family: Calibri, sans-serif; text-align:center;" class="">
                            {{ $loop->iteration }}
                        </td>
                        <td style="padding: 5pt 5pt 5pt 5pt; text-align:left;" class="">
                            {{ $barang->nama_produk }}
                        </td>
                        <td class="" style="padding: 5pt 5pt 5pt 5pt; font-family: Calibri,  sans-serif;">
                            {{ 'Rp' . number_format($barang->harga_satuan, 2, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white">
                    <th scope="row" class="px-6 py-3 text-base"></th>
                    <th scope="row" style="padding: 5pt 5pt 5pt 5pt;" class="">Total</th>
                    <td style="padding: 5pt 5pt 5pt 5pt" class="">
                        {{ 'Rp' . number_format($total, 2, ',', '.') }}
                    </td>
                </tr>
                <tr class="font-semibold text-gray-900 dark:text-white">
                    <th scope="row" style="padding: 5pt 5pt 5pt 5pt;" colspan="3" class="text-center">
                        {{ $pembelian->jumlah_uang_terbilang }} Rupiah
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="mx-32 my-10 shadow-md " style="margin-bottom: 0.5rem">
        <p style="">No. Rek BCA : 021 2362 555 <br>
        No. Rek BNI : 8373 88 3888 <br>
        No. Rek Mandiri : 112 0088 8588 78 <br>
        a.n David</p>
    </div>

    <div style="text-align: right; margin-right:2rem">
        <p>
            Approved by </p>
        </div>
        
    <div style="text-align: right; margin-top:1rem">
        <p>( <span style="margin-left:8rem">)</span> 

    </p> 
    </div>

    
</body>

</html>
