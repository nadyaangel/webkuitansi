<html lang="en">
<head>
    <title>Document</title>
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
  </style>
</head>
<body class="">
    @include('navbar')
    <div class="flex justify-center">

      <div class="bg-white rounded shadow-md px-5 py-5  md:w-1/3  ">
      <h1 class="block uppercase font-bold text-lg text-center my-6">Login</h1>
      <form action="{{route('login')}}" method="post" class="w-full md:h-96 max-w-sm">
        @csrf
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Username
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="username" name="username" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Password
              </label>
            </div>
            <div class="md:w-2/3">
              <input type="password" name="password" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password">
            </div>
          </div>
          
          <div class="md:flex md:items-center">
            
            <div class="flex justify-center md:w-full">
              <button type="submit" class="w-2/3 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Sign In
              </button>
            </div>
          </div>
        </form>
        
      </div>
    </div>
    </body>
</html>