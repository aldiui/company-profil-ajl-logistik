@extends('layouts.backend')

@section('title', 'Dashboard')

@push('style')
@endpush

@section('main')
    <div class="content-wrapper container">
        <div class="page-heading">
            <h3>@yield('title')</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-house text-success fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Distribution Center</h6>
                            <h6 class="font-extrabold mb-0">{{ $dc }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-geo-alt text-info fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Kota</h6>
                            <h6 class="font-extrabold mb-0">{{ $kota }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-cash text-primary fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Harga Retail</h6>
                            <h6 class="font-extrabold mb-0">{{ $hargaRetail }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-truck text-danger fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Harga Truck</h6>
                            <h6 class="font-extrabold mb-0">{{ $hargaTrucking }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-camera text-warning fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Galery</h6>
                            <h6 class="font-extrabold mb-0">{{ $galery }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-camera-video text-secondary fs-1 mb-4"></i>
                            <h6 class="text-muted font-semibold">Video</h6>
                            <h6 class="font-extrabold mb-0">{{ $video }}</h6>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
