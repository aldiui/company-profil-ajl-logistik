@extends('layouts.frontend')

@section('title', 'Home')

@push('style')
@endpush

@section('main')
    <header class="bg-home" style="background-image: url({{ asset('frontend/assets/background-home.png') }}); ">
        <div class="bg-dark bg-opacity-25">
            <div class="container">
                <div class="row align-items-center" style="height: 90vh">
                    <div class="col-lg-6  py-3 text-center text-lg-start">
                        <h1 class="text-shadow mb-2 fw-bolder text-ajl-secondary">
                            The Best Service Transport
                        </h1>
                        <h1 class="text-shadow mb-3 fw-bolder text-ajl-secondary">
                            and Logistic Partner
                        </h1>
                        <p class="text-shadow text-white fw-semibold">
                            We Deliver Your Stuff Safety And Fast
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Our Logistics Services</h2>
                    <p>Kami menyediakan berbagai jenis pilihan pengiriman untuk menyesuaikan kebutuhan pengiriman logistik
                        anda</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Our Advantages</h2>
                    <p>Keuntungan anda menggunakan jasa pengiriman kami</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Fast Delivery</h6>
                            <div class="mb-2">
                                <i class="bi bi-clock text-ajl-primary fs-1"></i>
                            </div>
                            <p>Barang Anda akan tiba sesuai estimasi, dengan tepat waktu dan aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">GPS Tracking</h6>
                            <div class="mb-2">
                                <i class="bi bi-geo-alt text-ajl-primary fs-1"></i>
                            </div>
                            <p>Kami menyediakan layanan GPS Tracking untuk meminimalisir hal-hal yang tidak diinginkan dan
                                menjaga keselamatan barang Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Affordable</h6>
                            <div class="mb-2">
                                <i class="bi bi-cash-coin text-ajl-primary fs-1"></i>
                            </div>
                            <p>Kami menawarkan layanan pengiriman yang terjangkau tanpa mengorbankan kualitas, sehingga Anda
                                dapat menghemat biaya logistik Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Good Services</h6>
                            <div class="mb-2">
                                <i class="bi bi-person-workspace text-ajl-primary fs-1"></i>
                            </div>
                            <p>Kami selalu memberikan pelayanan terbaik kepada klien dengan respon yang cepat dan memberikan
                                solusi apabila terdapat hambatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
