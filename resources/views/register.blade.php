<html lang="en">
<head>
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <form action="{{ route('register')}}" method="post">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Register</button>

    </form>
</body>
</html>