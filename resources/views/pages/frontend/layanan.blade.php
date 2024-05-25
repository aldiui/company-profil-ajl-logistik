@extends('layouts.frontend')

@section('title', 'Layanan')

@push('style')
@endpush

@section('main')
    <header class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mb-3 text-center text-lg-start">
                    <h2 class="fw-bold text-white text-ajl-secondary mb-3">Express Delivery</h2>
                    <p>Kami juga menyediakan layanan Express Delivery Retail untuk pengiriman paket kecil. Dengan solusi
                        logistik
                        yang efisien dan andal, kami mendukung berbagai bisnis retail dalam mengoptimalkan rantai pasokan
                        mereka. Layanan kami meliputi pengambilan barang, penyimpanan, pengemasan, dan pengiriman cepat
                        untuk memastikan produk Anda tiba tepat waktu dan dalam kondisi terbaik.</p>
                </div>
                <div class="col-lg-6 mb-3 text-center">
                    <img src="{{ asset('frontend/assets/mobilvan.png') }}" class="img-fluid px-4"
                        alt="Mobil Van - {{ config('app.name') }}">
                </div>
            </div>
        </div>
    </header>
    <section class="bg-home" style="background-image: url({{ asset('frontend/assets/gudang.png') }}); ">
        <div class="bg-dark bg-opacity-25 py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2 class="fw-bold text-ajl-secondary mb-3 text-shadow">Export Impor Management Services</h2>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card shadow rounded-4 p-4 h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-box-seam text-danger fs-1"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-3">PPJK
                                    Perusahaan Pengurusan Jasa Kepabeanan</h5>
                                <p class="mb-0">
                                    Kami menyediakan jasa yang akan memudahkan klien untuk mengurus kepabeanan ekspor dan
                                    impor
                                    pada saat keluar masuk di Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card shadow rounded-4 p-4 h-100">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-box2 text-danger fs-1"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-3">Freight
                                    Forwader</h5>
                                <p class="mb-0">
                                    Kami juga menyediakan pengurusan pengiriman dan juga penerimaan barang ekspor dan impor
                                    secara menyeluruh dan lengkap
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Our Trucking</h2>
                    <p>Kami menyediakan berbagai jenis trucking untuk mengantar segala pengiriman logistik anda</p>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/mobil-van.png') }}"
                            class="img-fluid card-img-top custom-img-trucking" alt="Mobil Van - {{ config('app.name') }}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Blind Van</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/cde-box.png') }}"
                            class="img-fluid card-img-top custom-img-trucking"
                            alt="CDE Box -
                            {{ config('app.name') }}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">CDE Box</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/cdd-box.png') }}"
                            class="img-fluid card-img-top custom-img-trucking"
                            alt="CDD Box -
                            {{ config('app.name') }}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">CDD Box</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/fuso-box.png') }}"
                            class="img-fluid card-img-top custom-img-trucking" alt="Fuso Box - {{ config('app.name') }}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Fuso Box</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/wing-box.png') }}"
                            class="img-fluid card-img-top custom-img-trucking" alt="Wing Box - {{ config('app.name') }}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Wing Box</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
