<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="main-header">
        <h1>Laundry Beranda Admin</h1>
    </header>


    <nav class="main-nav">
        <ul>
            <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('daftarPesanan') }}" class="{{ request()->routeIs('daftarPesanan') ? 'active' : '' }}">Daftar Pesanan</a></li>
            <li><a href="{{ route('recap') }}" class="{{ request()->routeIs('recap') ? 'active' : '' }}">Recap</a></li>
            <form action="{{route ('logout')}}" method="post" class="main-nav">
                @csrf
                <li><button type="submit" class="logout-btn">LogOut</button></li>
            </form>
        </ul>
    </nav>

    {{ $slot }}

    {!! $javascript ?? '' !!}

</body>

</html>