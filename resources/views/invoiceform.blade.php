<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Form</title>
    @vite('resources/css/app.css')




</head>

<body>
    <h1 class="text-lg text-center font-semibold mt-5">Form Pembelian</h1>

    <form class="mx-10 my-20 w-full max-w-lg" method="POST" action="/saveInvoice">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password"
                    name="name">
                    Tagihan milik:
                </label>
                <input name="nama"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password" type="text" placeholder="Nama Pemilik Tagihan">
            </div>
        </div>

        <div id="items-container">
            <div class="item">
                <h3 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Rincian </h3>
                <div class="md:flex md:items-center mb-6">
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="nama_produk">
                                Nama Item
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="barang[0][nama_produk]" id="barang[0][nama_produk]" type="text"
                                placeholder="Ex. OJP">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label for="barang[0][harga_satuan]"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Biaya
                            </label>
                            <input for="barang[0][harga_satuan]" name="barang[0][harga_satuan]"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="harga_satuan" type="number" placeholder="Ex:1000000">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="md:w-2/3">
            <button onclick="addItem()"
                class="shadow bg-blue-500 hover:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="button">
                Tambah Barang
            </button>
        </div>

        {{-- </div>
                <div id="items-container">
                    <div class="item">
                        <label for="">Nama produk:</label>
                        <input class="border px-3 my-3 rounded-md h-7" type="text" name="barang[0][nama_produk]" required>
      
                        <label class="mt-10"for="harga_satuan">Harga Satuan</label>
                        <input class="border rounded-md" type="number" name="barang[0][harga_satuan]" min="0" required>
                    </div>
                </div>
            </div> --}}
        <div class="flex justify-center">

            <button class="bg-blue-600 text-white px-3 py-1 my-8 rounded-md" type="submit">Tambah Pembelian</button>
        </div>

    </form>


    <script>
        let itemCount = 0;

        function addItem() {
            itemCount++
            const itemContainer = document.getElementById('items-container');
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('item');

            const namaProdukLabel = document.createElement('label');
            namaProdukLabel.textContent = 'Nama Item: ';
            namaProdukLabel.classList.add(
                'block',
                'uppercase',
                'tracking-wide',
                'text-gray-700',
                'text-xs',
                'font-bold',
                'mb-2'
            )
            itemDiv.appendChild(namaProdukLabel);

            const namaProdukInput = document.createElement('input');
            namaProdukInput.type = 'text';
            namaProdukInput.classList.add(
                'appearance-none',
                'block',
                'w-full',
                'bg-gray-200',
                'text-gray-700',
                'border',
                'border-gray-200',
                'rounded',
                'py-3',
                'px-4',
                'my-3',
                'leading-tight',
                'focus:outline-none',
                'focus:bg-white'
            );
            namaProdukInput.name = `barang[${itemCount}][nama_produk]`;
            namaProdukInput.required = true;
            itemDiv.appendChild(namaProdukInput);


            const hargaSatuanLabel = document.createElement('label');
            hargaSatuanLabel.textContent = 'Harga Satuan: ';
            hargaSatuanLabel.classList.add(
                'block',
                'uppercase',
                'tracking-wide',
                'text-gray-700',
                'text-xs',
                'font-bold',
                'mb-2'
            )
            itemDiv.appendChild(hargaSatuanLabel);

            const hargaSatuanInput = document.createElement('input');
            hargaSatuanInput.type = 'number';
            hargaSatuanInput.name = `barang[${itemCount}][harga_satuan]`;
            hargaSatuanInput.min = 0;
            hargaSatuanInput.required = true;
            hargaSatuanInput.classList.add(
                'appearance-none',
                'block',
                'w-full',
                'bg-gray-200',
                'text-gray-700',
                'border',
                'border-gray-200',
                'rounded',
                'py-3',
                'px-4',
                'leading-tight',
                'focus:outline-none',
                'focus:bg-white',
                'focus:border-gray-500'
            );
            itemDiv.appendChild(hargaSatuanInput);

            itemContainer.appendChild(itemDiv);
        }
    </script>
</body>

</html>
