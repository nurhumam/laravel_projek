<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/regis.css') }}">
</head>
<body>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <h2>Register</h2>
        {{-- <input type="nama" name="nama" placeholder="Nama" required> --}}
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <p>Already a member? <a href="{{ route('login') }}">Login now</a></p>
    </form>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
