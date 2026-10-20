<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Galeri Lukisan Digital</title>
    <!-- CSS Bootstrap Lokal -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('arts.index') }}">🎨 Galeri Lukisan Digital</a>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-white text-center py-3 border-top mt-auto">
        <small class="text-muted">&copy; 2026 Galeri Lukisan Digital - Alfian Dewa Permana (251011700203)</small>
    </footer>

    <!-- JS Bootstrap Lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>