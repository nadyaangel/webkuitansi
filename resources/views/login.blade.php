<html lang="en">
<head>
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <form action="{{route('login')}}" method="post">
        @csrf
        <label for="username">Username</label>
        <input type="username" name="username" required>
        <br>
        <label for="password"> Password
        </label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>