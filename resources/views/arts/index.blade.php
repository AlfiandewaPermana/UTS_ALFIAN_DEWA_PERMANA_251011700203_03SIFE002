@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<div class="hero-section text-center mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold mb-2">Galeri Lukisan Digital</h1>
        <p class="lead mb-1">Koleksi Karya Digital Seni Visual Terbaik & Kualitas Tinggi</p>
        <p class="text-light opacity-75">NIM: 251011700203 | alfian.dewa@unpam.ac.id | Kelas 03SIFE002</p>
        <h5 class="fw-bold text-info mt-3">ALFIAN DEWA PERMANA</h5>
        <div class="mt-4">
            <!-- KODE BARU -->
            <a href="{{ url('/') }}#katalog" class="btn btn-primary btn-lg me-2 px-4 shadow">Jelajahi Katalog</a>
            <button class="btn btn-outline-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#aboutModal">Tentang Kami</button>
        </div>
    </div>
</div>

<!-- KATALOG SECTION -->
<div class="container" id="katalog">
    <!-- SEARCH & FILTER BAR -->
<div class="row mb-4 align-items-center">
    <div class="col-md-6 mb-3 mb-md-0">
        <h3 class="fw-bold mb-0">Daftar Karya Seni</h3>
        <span class="text-muted">Menampilkan seluruh koleksi lukisan digital terpilih</span>
    </div>
    <div class="col-md-6">
        <form action="{{ route('arts.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari lukisan atau artist..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
                @if(request('search'))
                    <a href="{{ route('arts.index') }}" class="btn btn-outline-secondary">Reset</a>
                @endif
            </div>
        </form>
    </div>
</div>
    </div>

    <!-- CARDS GRID -->
    <div class="row g-4">
        @foreach($arts as $art)
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{ asset('assets/images/' . $art->image) }}" class="card-img-top" alt="{{ $art->title }}">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-2">
                            <span class="badge bg-secondary mb-1">{{ $art->software_used }}</span>
                            <h5 class="card-title fw-bold text-dark mb-1">{{ $art->title }}</h5>
                            <p class="card-text text-muted small mb-2">Artist: {{ $art->artist }}</p>
                        </div>
                        <div class="mt-auto">
                            <p class="card-text fw-bold text-primary fs-5 mb-3">Rp {{ number_format($art->price, 0, ',', '.') }}</p>
                            <a href="{{ route('arts.show', $art->id) }}" class="btn btn-primary w-100 fw-semibold">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection