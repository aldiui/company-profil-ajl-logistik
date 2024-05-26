@extends('layouts.frontend')

@section('title', 'Galery')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">@yield('title')</h3>
            </div>
            @foreach ($galeries as $row)
                <div class="col-md-6 col-lg-4 mb-3">
                    <img src="{{ asset('storage/galery/' . $row->foto) }}" class="img-fluid custom-img mb-3"
                        alt="Foto -{{ config('app.name') }}">
                    <div class="mb-2 d-flex align-items-center text-muted small">
                        <i class="bi bi-linkedin  me-2"></i>
                        <span>{{ formatTanggal($row->created_at, 'd F Y') }}</span>
                    </div>
                    <p class="fw-semibold text-dark mb-0">{{ $row->judul }}</p>
                </div>
            @endforeach
        </div>
    </header>
@endsection

@push('scripts')
@endpush
