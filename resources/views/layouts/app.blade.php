<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'David - Mechatronics Engineer')</title>
    <!-- Font Modern Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css?v=3') }}">
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

    <!-- Header / Navbar -->
    <header class="navbar">
        <a href="{{ route('home') }}" class="brand">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo David">
            </div>
            <span class="brand-name">David<span> Rido</span></span>
        </a>

        <nav class="menu">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'active' : '' }}">Service</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main style="flex: 1;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-inner">
            <p>&copy; {{ date('Y') }} <strong>David</strong> — Teknologi Rekayasa Mekatronika, Politeknik ATMI Surakarta.</p>
            <div class="footer-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('service') }}">Service</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>