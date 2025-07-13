<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Mobil Online')</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">Toko Mobil</a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                    <li><a href="{{ route('login') }}" class="button primary">Login Admin</a></li>
                </ul>
            </nav>
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main class="content-wrapper">
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Toko Mobil. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.main-nav ul').classList.toggle('active');
            this.classList.toggle('active');
        });
    </script>
</body>
</html>