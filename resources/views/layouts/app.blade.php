<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Lukisan Digital - UTS Web Engineering</title>
    <!-- CSS Bootstrap Lokal -->
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        body { background-color: #f8f9fa; }
        .hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 60px 0;
            border-bottom: 4px solid #3b82f6;
        }
        .card-img-top {
            height: 230px;
            object-fit: cover;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                🎨 Galeri Lukisan Digital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#katalog">Katalog Seni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- MODAL ABOUT US -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="aboutModalLabel">🎨 Tentang Galeri Digital</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <h4 class="fw-bold mb-1">Galeri Lukisan Digital</h4>
                    <p class="text-muted small">Platform Pameran & Katalog Karya Seni Digital Interaktif</p>
                    <hr>
                    <p class="mb-2">Aplikasi ini dikembangkan untuk memenuhi tugas Ujian Tengah Semester (UTS) Mata Kuliah Rekayasa Web.</p>
                    
                    <div class="card bg-light border-0 p-3 my-3 text-start">
                        <div class="row g-2 text-dark">
                            <div class="col-4 fw-bold">Pengembang</div>
                            <div class="col-8">: Alfian Dewa Permana</div>
                            <div class="col-4 fw-bold">NIM</div>
                            <div class="col-8">: 251011700203</div>
                            <div class="col-4 fw-bold">Kelas</div>
                            <div class="col-8">: 03SIFE002</div>
                            <div class="col-4 fw-bold">Program Studi</div>
                            <div class="col-8">: Sistem Informasi</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white py-4 mt-5 border-top">
        <div class="container text-center">
            <p class="mb-1">© 2026 <strong>Galeri Lukisan Digital</strong> — Developed for Web Engineering UTS Project</p>
            <small class="text-secondary">Alfian Dewa Permana (251011700203) | Universitas Pamulang</small>
        </div>
    </footer>

    <!-- JS Bootstrap Lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>