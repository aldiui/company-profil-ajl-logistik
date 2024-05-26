@extends('layouts.frontend')

@section('title', 'Cabang')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">Cabang</h3>
            </div>
            @foreach ($distributionCenters as $row)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100 p-2 rounded-4">
                        <div class="card-body">
                            <div class="mb-2">
                                <i class="bi bi-truck text-ajl-primary fs-1"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-3">{{ $row->kode }}</h5>
                            <div class="mb-2 d-flex align-items-start">
                                <i class="bi bi-building me-3"></i>
                                <span>{{ $row->nama }}</span>
                            </div>
                            <div class="mb-2 d-flex align-items-start">
                                <i class="bi bi-geo-alt  me-3"></i>
                                <span>{{ $row->alamat ?? '-' }}</span>
                            </div>
                            <div class="mb-2 d-flex align-items-start">
                                <i class="bi bi-telephone  me-3"></i>
                                <span>{{ $row->telepon ?? '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </header>
@endsection

@push('scripts')
@endpush
