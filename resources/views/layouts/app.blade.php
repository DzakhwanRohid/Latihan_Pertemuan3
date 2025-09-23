<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">WebsiteKu</a>
            <ul class="navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/mahasiswa/profil') }}">Profil Mahasiswa</a></li>
                <li><a href="{{ url('/mahasiswa/detail') }}">Detail Mahasiswa</a></li>
            </ul>
        </div>
    </nav>

    <div class="container content">
        @yield('content')
    </div>

</body>
</html>