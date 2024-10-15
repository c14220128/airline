<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="bg-yellow-400 py-4 fixed w-full">
        <h1 class="text-3xl font-bold text-center text-black ">Airplane Booking System</h1>
    </div>
    <div class="container mx-auto min-h-screen">
        @yield('isi')
    </div>

    <footer class="bg-yellow-400 p-3 text-end font-bold">
        by Web Framework and Deployment - 2024
    </footer>

</body>

</html>
