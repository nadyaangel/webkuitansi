<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <title>Form</title>
       @vite('resources/css/app.css')
        
    </head>
    <body >
        <h1 class="text-lg text-center font-semibold mt-5">Form Pembelian</h1>

        <form class="mx-10 mt-10" method="POST" action="/saveInvoice">
            @csrf

            <div>
                <label for="nama">
                   Nama:  
                </label>
                <input class="border" type="text" name="nama" required>
            </div>
            <div>
                <h3 class="mt-5">Barang </h3>
                <div id="items-container">
                    <div class="item">
                        <label for="">Nama produk:</label>
                        <input class="border px-3 my-3 rounded-md h-7" type="text" name="barang[0][nama_produk]" required>
                        <label class="mx-2" for="jumlah">Jumlah:</label>
                        <input class="border rounded-md" type="number" name="barang[0][jumlah]" required>
                        <label class="mt-10"for="harga_satuan">Harga Satuan</label>
                        <input class="border rounded-md" type="number" name="barang[0][harga_satuan]" min="0" required>
                    </div>
                    
                
                </div>
                <button class="bg-blue-600 text-white px-3 py-1 my-8 rounded-md" type="button" onclick="addItem()">Tambah Barang</button>
            </div>

            <div class="flex justify-center">

                <button class="bg-blue-600 text-white px-3 py-1 my-8 rounded-md" type="submit">Tambah Pembelian</button>
            </div>
        </form>
        <script>
            
        
            let itemCount = 0;

            function addItem(){
                itemCount++
                const itemContainer = document.getElementById('items-container');
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('item');

            const namaProdukLabel = document.createElement('label');
            namaProdukLabel.textContent = 'Nama Produk: ';
            itemDiv.appendChild(namaProdukLabel);

            const namaProdukInput = document.createElement('input');
            namaProdukInput.type='text';
            namaProdukInput.name= `barang[${itemCount}][nama_produk]`;
            namaProdukInput.required = true;
            itemDiv.appendChild(namaProdukInput);

            const jumlahLabel = document.createElement('label');
            jumlahLabel.textContent = 'Jumlah: ';
            itemDiv.appendChild(jumlahLabel);

            const jumlahInput = document.createElement('input');
            jumlahInput.type = 'number';
            jumlahInput.name = `barang[${itemCount}][jumlah]`
            jumlahInput.min = 1;
            jumlahInput.required = true;
            itemDiv.appendChild(jumlahInput);

            const hargaSatuanLabel = document.createElement('label');
            hargaSatuanLabel.textContent = 'Harga Satuan: ';
            itemDiv.appendChild(hargaSatuanLabel);

            const hargaSatuanInput = document.createElement('input');
            hargaSatuanInput.type = 'number';
            hargaSatuanInput.name = `barang[${itemCount}][harga_satuan]`;
            hargaSatuanInput.min = 0;
            hargaSatuanInput.required = true;
            itemDiv.appendChild(hargaSatuanInput);

            itemContainer.appendChild(itemDiv);
            }
          

        </script>
    </body>
</html>
