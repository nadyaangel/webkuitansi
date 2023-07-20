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

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-2">
            <div class="flex items-center justify-between">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="text-2xl font-semibold text-gray-800">Flowbite</span>
                </a>
                <button class="block md:hidden px-3 py-2 text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="hidden md:flex space-x-4">
                    <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-900">Daftar Invoice</a>
                    <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-900">Daftar Kuitansi</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 mt-16">
        <h1 class="text-center text-3xl font-bold text-gray-800">Selamat datang! Pilih layanan yang akan Anda lakukan!
        </h1>
    </div>

    <div class="flex justify-center">
        <p class="text-center w-1/2">
            Coba generate kuitansi dan invoice Anda dengan mudah di sini dan lihat arsipnya pada menu
        </p>
    </div>

    <div class="flex justify-center m-5 space-x-8">
        <div class="flex justify-center mt-8 space-x-4">
            <a href="#">
                <div class="bg-white px-5 py-2 shadow-md rounded-md image-container">
                    <div class="rounded-full overflow-hidden w-36 h-36 ">
                        <img src="/assets/image/money.jpg" class="w-full h-full" alt="">
                    </div>
                    <p class="mt-5 text-center">Kuitansi</p>
                </div>
                <!-- Add a wrapper div to apply the circular style -->
            </a>
        </div>
        <div class="flex justify-center mt-8">
            <a href="#">
                <div class="bg-white px-5 py-2 shadow-md rounded-md image-container">
                    <div class="rounded-full overflow-hidden w-36 h-36 ">
                        <img src="/assets/image/money.jpg" class="w-full h-full" alt="">
                    </div>
                    <p class="mt-5 text-center">Kuitansi</p>
                </div>
                <!-- Add a wrapper div to apply the circular style -->
            </a>
        </div>
    </div>
   


</body>

</html>
