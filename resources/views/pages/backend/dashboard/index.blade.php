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
                <div class="col-6 col-lg-3 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-house text-success fs-1 mb-3"></i>
                            <h6 class="text-muted font-semibold">DC</h6>
                            <h6 class="font-extrabold mb-0">{{ $dc }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-geo-alt text-info fs-1 mb-3"></i>
                            <h6 class="text-muted font-semibold">Kota</h6>
                            <h6 class="font-extrabold mb-0">{{ $kota }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-cash text-primary fs-1 mb-3"></i>
                            <h6 class="text-muted font-semibold">Harga Retail</h6>
                            <h6 class="font-extrabold mb-0">{{ $hargaRetail }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-truck text-danger fs-1 mb-3"></i>
                            <h6 class="text-muted font-semibold">Harga Truck</h6>
                            <h6 class="font-extrabold mb-0">{{ $hargaTrucking }}</h6>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
