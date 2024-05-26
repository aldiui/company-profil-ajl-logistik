@extends('layouts.frontend')

@section('title', 'Video')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">@yield('title')</h3>
            </div>
            @foreach ($videos as $row)
                <div class="col-md-6 mb-3">
                    <div class="ratio ratio-16x9 mb-2" style="height: 300px;">
                        <iframe class="img-fluid w-100" src="{{ convertToEmbedUrl($row->link) }}" allowfullscreen></iframe>
                    </div>
                    <div class="mb-2 d-flex align-items-center text-muted small">
                        <i class="bi bi-linkedin me-2"></i>
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
