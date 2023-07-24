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
        <form class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Full Name
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Jane Doe">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        First Name
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                    </div>
                  </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3"></div>

            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                  Sign Up
                </button>
              </div>
            </div>
          </form>
          <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  First Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Last Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Password
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                  City
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  State
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>New Mexico</option>
                    <option>Missouri</option>
                    <option>Texas</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Zip
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
              </div>
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

            // const jumlahLabel = document.createElement('label');
            // jumlahLabel.textContent = 'Jumlah: ';
            // itemDiv.appendChild(jumlahLabel);

            // const jumlahInput = document.createElement('input');
            // jumlahInput.type = 'number';
            // jumlahInput.name = `barang[${itemCount}][jumlah]`
            // jumlahInput.min = 1;
            // jumlahInput.required = true;
            // itemDiv.appendChild(jumlahInput);

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
