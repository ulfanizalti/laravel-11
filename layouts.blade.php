<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Harga - IQ-LO Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/katalog-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <a href="#" class="logo">IQ-LO LAUNDRY</a>
            <nav>
                <ul>
                    <li><a href="{{ route ('landingPage') }}" class="{{ request()->routeIs('landingPage') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route ('katalogPage') }}" class="{{ request()->routeIs('katalogPage') ? 'active' : '' }}">Katalog Harga</a></li>
                    <li><a href="{{ route ('kontak_pemesananPage') }}" class="{{ request()->routeIs('kontak_pemesananPage') ? 'active' : '' }}">Kontak & Pemesanan</a></li>
                    @if(Auth::user())
                    <form action="{{route ('logout')}}" method="post">
                        @csrf
                        <li><button type="submit" class="btn-logout">LogOut</button></li>
                    </form>
                    @else
                    <li><a href="{{ route('login') }}" class="btn-signin">Sign In</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    {{ $slot }}
    {!! $footer ?? '' !!}
    {!! $javascript ?? '' !!}
</body>

</html>