@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card border-0 shadow-sm p-4 rounded-3 bg-white">
                <img src="{{ asset('assets/images/' . $art->image) }}" class="img-fluid rounded mb-4" alt="{{ $art->title }}" style="max-height: 350px; object-fit: contain;">
                
                <h3 class="fw-bold mb-2">{{ $art->title }}</h3>
                <p class="text-muted mb-1"><strong>Artist:</strong> {{ $art->artist }}</p>
                <p class="text-muted mb-1"><strong>Resolusi:</strong> {{ $art->resolution }}</p>
                <p class="text-muted mb-1"><strong>Software:</strong> {{ $art->software_used }}</p>
                
                <h4 class="text-primary fw-bold my-3">Rp {{ number_format($art->price, 0, ',', '.') }}</h4>
                <p class="text-muted small mb-4">ID Produk: {{ $art->id }}</p>

                <div>
                    <a href="{{ route('arts.index') }}" class="btn btn-secondary px-4 fw-bold">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection