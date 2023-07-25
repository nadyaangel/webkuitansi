<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Form</title>
    @vite('resources/css/app.css')




</head>

<body>
    @include('navbar')
    <h1 class="text-lg text-center font-semibold my-5 block uppercase">Form Pembelian</h1>

    <div class="flex justify-center">

        <div class="shadow-md mx-10 mb-10 py-2 flex justify-center w-3/4 max:md:w-full">
            <form class="mx-10 my-16 w-full max-w-lg" method="POST" action="/saveInvoice">
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
                <div class="">
                    <h3 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Rincian </h3>
                    <div class="item md:flex md:items-center mb-6">
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="item_block w-full md:w-1/2 px-3 mb-6 md:mb-0">
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
        Tambah Rincian
    </button>
</div>

<div class="flex justify-center">
    
    <button class="shadow mt-10 bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Proses</button>
</div>

</form>

</div>

</div>

    <script>
        let itemCount = 0;

        function addItem() {
        itemCount++;
        const itemContainer = document.getElementById('items-container');
        const itemDiv = document.createElement('div');

        // Add class 'item' to the new container
        itemDiv.classList.add('item', 'md:flex', 'md:items-center', 'mb-6');

        // Similar to the existing structure
        const itemFlexDiv = document.createElement('div');
        itemFlexDiv.classList.add('flex', 'flex-wrap', '-mx-3', 'mb-3');

        const itemBlock1 = document.createElement('div');
        itemBlock1.classList.add('item_block', 'w-full', 'md:w-1/2', 'px-3', 'mb-6', 'md:mb-0');

        const namaProdukLabel = document.createElement('label');
        namaProdukLabel.textContent = 'Nama Item: ';
        namaProdukLabel.classList.add('block', 'uppercase', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');

        const namaProdukInput = document.createElement('input');
        namaProdukInput.type = 'text';
        namaProdukInput.placeholder = "Ex. OJP"
        namaProdukInput.classList.add('appearance-none', 'block', 'w-full', 'bg-gray-200', 'text-gray-700', 'border', 'border-gray-200', 'rounded', 'py-3', 'px-4', 'mb-3', 'leading-tight', 'focus:outline-none', 'focus:bg-white');
        namaProdukInput.name = `barang[${itemCount}][nama_produk]`;
        namaProdukInput.required = true;

        itemBlock1.appendChild(namaProdukLabel);
        itemBlock1.appendChild(namaProdukInput);

        const itemBlock2 = document.createElement('div');
        itemBlock2.classList.add('w-full', 'md:w-1/2', 'px-3');

        const hargaSatuanLabel = document.createElement('label');
        hargaSatuanLabel.textContent = 'Biaya: ';
        hargaSatuanLabel.classList.add('block', 'uppercase', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');

        const hargaSatuanInput = document.createElement('input');
        hargaSatuanInput.type = 'number';
        hargaSatuanInput.placeholder = "Ex:1000000"
        hargaSatuanInput.name = `barang[${itemCount}][harga_satuan]`;
        hargaSatuanInput.min = 0;
        hargaSatuanInput.required = true;
        hargaSatuanInput.classList.add('appearance-none', 'block', 'w-full', 'bg-gray-200', 'text-gray-700', 'border', 'border-gray-200', 'rounded', 'py-3', 'px-4', 'leading-tight', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');

        itemBlock2.appendChild(hargaSatuanLabel);
        itemBlock2.appendChild(hargaSatuanInput);

        itemFlexDiv.appendChild(itemBlock1);
        itemFlexDiv.appendChild(itemBlock2);

        itemDiv.appendChild(itemFlexDiv);

        itemContainer.appendChild(itemDiv);
    }
    </script>
</body>

</html>
