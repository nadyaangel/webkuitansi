<html lang="en">
<head>
    <title>Login</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
      body {
          /* Replace "image.jpg" with the actual name of your image file */
          background-image: url('/assets/image/bg-web.png');
          /* Set the background image size and repeat behavior as needed */
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
      }
      input[type="password"], input[type="email"] {
  /* Untuk menghilangkan border */
  border: 1px solid #ccc;

  /* Atur warna border saat dalam mode fokus */
  /* Misalnya, Anda dapat mengatur warna border saat fokus menjadi biru seperti ini: */
  border-color: none;

  /* Ganti ukuran border sesuai kebutuhan Anda */
  border-radius: 4px;

  /* Atur padding agar konten input tidak terlalu dekat dengan border */
  padding: 0.5rem;
}
  </style>
</head>
<body class="">
    @include('navbar')
    <div class="flex justify-center mt-10">

      <div class="bg-white rounded shadow-md px-5 py-5 min-h-full md:w-1/3 mx-5 md:mx-0 mb-10 ">
      <h1 class="block uppercase font-bold text-lg text-center my-6">Register</h1>
      <p class="mx-7 text-sm text-center font-semibold my-4">Hai, silakan daftarkan username, email, dan password Anda!</p>
      <form action="{{route('register')}}" method="post" class="w-full md:h-72">
        @csrf
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-800" id="username" type="username" name="username"  placeholder="Username">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-800" id="email" type="email" name="email"  placeholder="Email">
          </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Your Password" name="password">
        </div>
        <div class="md:flex md:items-center mb-2 col-md-pl-5 col-lg-pl-5">
            <div class="w-full flex justify-center ">
              <button type="submit" class="w-full leading-tight md:ml-0 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Register
              </button>
            </div>
          </div>
       
        </form>
        <p class="text-center my-5 text-xs">Sudah punya akun? <span><a href="/login" class="text-blue-600">Masuk</a> </span> </p>
      </div>
    </div>
    </body>
</html>