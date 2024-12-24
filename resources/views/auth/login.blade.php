<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/regis.css') }}">
</head>
<body>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <h2>Login</h2>
        {{-- <input type="nama" name="nama" placeholder="Nama" required> --}}
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Not a member? <a href="{{ route('register') }}">Signup now</a></p>
    </form>
    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif
</body>
</html>
