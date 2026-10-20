@extends('layouts.app')

@section('content')
<div class="bg-white py-5 mb-4 border-bottom text-center">
    <div class="container">
        <h1 class="fw-bold display-6">Galeri Lukisan Digital</h1>
        <p class="text-muted mb-1 fs-5">251011700203 | alfian.dewa@unpam.ac.id</p>
        <p class="text-muted mb-1 fs-6">Prodi Sistem Informasi - Kelas 03SIFE002</p>
        <h4 class="fw-bold text-primary mt-2">ALFIAN DEWA PERMANA</h4>
    </div>
</div>

<div class="container pb-5">
    <div class="row g-4">
        @foreach($arts as $art)
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('assets/images/' . $art->image) }}" class="card-img-top bg-secondary bg-opacity-10" alt="{{ $art->title }}" style="height: 220px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold mb-1 fs-6">{{ $art->title }}</h5>
                    <p class="text-muted small mb-2">Artist: {{ $art->artist }}</p>
                    <p class="fw-bold text-primary fs-5 mt-auto mb-3">Rp {{ number_format($art->price, 0, ',', '.') }}</p>
                    <a href="{{ route('arts.show', $art->id) }}" class="btn btn-primary btn-sm w-100 fw-bold">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection