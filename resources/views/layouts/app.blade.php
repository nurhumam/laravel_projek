<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Karang Taruna')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Karang Taruna Rw 14</h1>
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}#about">About</a>
            <a href="{{ route('home') }}#feedback">Feedback</a>
            <a href="{{ route('gallery') }}">Gallery</a>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Contact Us</p>
        <p>Email: info@karangtarunau14.com</p>
        <p>Phone: +62852-8126-2229</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
