<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Welcome Page</title>
    <!-- Include the Tailwind CSS stylesheet -->
    @vite('resources/css/app.css')

    <style>
        .image-container {
            transition: box-shadow 0.3s ease;
            /* Transition effect for the shadow */
        }

        .image-container:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add shadow when hovered */
        }
    </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar -->
    @include('navbar')
  
   

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 mt-16">
        <h1 class="text-center text-3xl font-bold text-gray-800">Selamat datang! Pilih layanan yang akan Anda lakukan!
        </h1>
    </div>

    <div class="flex justify-center">
        <p class="text-center w-1/2">
            Coba generate invoice Anda dengan mudah di sini dan lihat arsipnya pada menu
        </p>
    </div>

    <div class="flex justify-center m-5 space-x-8">
        {{-- <div class="flex justify-center mt-8 space-x-4">
            <a href="/kuitansi/form">
                <div class="bg-white px-5 py-2 shadow-md rounded-md image-container">
                    <div class="rounded-full overflow-hidden w-36 h-36 ">
                        <img src="/assets/image/money.jpg" class="w-full h-full" alt="">
                    </div>
                    <p class="mt-5 text-center">Kuitansi</p>
                </div>
                <!-- Add a wrapper div to apply the circular style -->
            </a>
        </div> --}}
        <div class="flex justify-center mt-8">
            <a href="/invoice/form">
                <div class="bg-white px-5 py-2 shadow-md rounded-md image-container">
                    <div class="rounded-full overflow-hidden w-36 h-36 ">
                        <img src="/assets/image/casier.jpg" class="w-full h-full" alt="">
                    </div>
                    <p class="mt-5 text-center">Invoice</p>
                </div>
                <!-- Add a wrapper div to apply the circular style -->
            </a>
        </div>
    </div>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
