<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container">

        <nav class="navbar">
            <a class="nav-link btn btn-secondary px-3 py-2" href="{{ route('home') }}">Home</a>
            <a class="nav-link btn btn-secondary px-3 py-2" href="{{ route('about') }}">About</a>
            <a class="nav-link btn btn-secondary px-3 py-2" href="{{ route('contacts') }}">Contacts</a>
        </nav>
        <hr>
        <div class="row my-5">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
