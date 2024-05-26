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
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Our Logistics Services</h2>
                    <p>Kami menyediakan berbagai jenis pilihan pengiriman untuk menyesuaikan kebutuhan pengiriman logistik
                        anda</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/laut.jpg') }}"
                            class="img-fluid rounded-top card-img-top custom-img"
                            alt="Laut - Our Logistics Services - {{ config('app.name') }} - Sea Transport">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Laut</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/darat.png') }}"
                            class="img-fluid rounded-top card-img-top custom-img"
                            alt="Darat - Our Logistics Services - {{ config('app.name') }} - Land Transport">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Darat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/udara.jpg') }}"
                            class="img-fluid rounded-top card-img-top custom-img"
                            alt="Udara - Our Logistics Services - {{ config('app.name') }} - Air Transport">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Udara</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-4">
                        <img src="{{ asset('frontend/assets/kereta.jpg') }}"
                            class="img-fluid rounded-top card-img-top custom-img"
                            alt="Kereta - Our Logistics Services - {{ config('app.name') }} - Train Transport">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-0">Kereta</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Trust in Our Logistics Services</h2>
                    <p>Kami memahami bahwa kepercayaan adalah kunci dalam layanan logistik. Oleh karena itu, kami
                        menyediakan berbagai jenis pilihan pengiriman yang dapat diandalkan untuk memenuhi kebutuhan
                        logistik Anda dengan integritas dan transparansi.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 text-center">
                    <img src="{{ asset('frontend/assets/sertifikat-halal.png') }}" class="img-fluid"
                        alt="Sertifikat Halal - {{ config('app.name') }}">
                    <h5 class="mt-2 fw-bold text-ajl-secondary">Sertifikat Halal</h5>
                    <p>Dengan sertifikat halal, kami memastikan semua proses logistik sesuai dengan standar halal yang
                        berlaku.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 text-center">
                    <img src="{{ asset('frontend/assets/sertifikat-iso.png') }}" class="img-fluid"
                        alt="Sertifikat ISO - {{ config('app.name') }}">
                    <h5 class="mt-2 fw-bold text-ajl-secondary">Sertifikat ISO</h5>
                    <p>Sertifikat ISO menunjukkan komitmen kami terhadap kualitas dan standar internasional dalam layanan
                        logistik.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 text-center">
                    <img src="{{ asset('frontend/assets/gps-tracking.png') }}" class="img-fluid"
                        alt="GPS Tracking - {{ config('app.name') }}">
                    <h5 class="mt-2 fw-bold text-ajl-secondary">GPS Tracking</h5>
                    <p>Layanan GPS Tracking kami memungkinkan Anda untuk melacak pengiriman secara real-time, memberikan
                        ketenangan pikiran dan transparansi.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-ajl-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 mb-3 text-center">
                    <img src="{{ asset('frontend/assets/truck1.png') }}"
                        class="img-fluid rounded-4  rounded-top card-img-top w-100 px-4"
                        alt="Truck - {{ config('app.name') }} - Truck Transport">
                </div>
                <div class="col-lg-6 mb-3 text-center text-lg-start">
                    <h2 class="fw-bold text-white text-ajl-secondary text-shadow mb-3">We Provide Shipping To Anywhere</h2>
                    <p class="text-white">We Offer Fast And Reliable Shipping Services For Domestic And International
                        Shipments With Land, Sea, Air Fleets Safely And On Time</p>
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
                    <div class="card shadow-sm border-ajl-primary h-100 p-2 rounded-4">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-3">Fast Delivery</h5>
                            <div class="mb-2">
                                <i class="bi bi-clock text-ajl-primary fs-1"></i>
                            </div>
                            <p class="mb-0">Barang Anda akan tiba sesuai estimasi, dengan tepat waktu dan aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100 p-2 rounded-4">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-3">GPS Tracking</h5>
                            <div class="mb-2">
                                <i class="bi bi-geo-alt text-ajl-primary fs-1"></i>
                            </div>
                            <p class="mb-0">Kami menyediakan layanan GPS Tracking untuk meminimalisir hal-hal yang tidak
                                diinginkan dan
                                menjaga keselamatan barang Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100 p-2 rounded-4">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-3">Affordable</h5>
                            <div class="mb-2">
                                <i class="bi bi-cash-coin text-ajl-primary fs-1"></i>
                            </div>
                            <p class="mb-0">Kami menawarkan layanan pengiriman yang terjangkau tanpa mengorbankan
                                kualitas, sehingga Anda
                                dapat menghemat biaya logistik Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100 p-2 rounded-4">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-dark mb-3">Good Services</h5>
                            <div class="mb-2">
                                <i class="bi bi-person-workspace text-ajl-primary fs-1"></i>
                            </div>
                            <p class="mb-0">Kami selalu memberikan pelayanan terbaik kepada klien dengan respon yang
                                cepat
                                dan memberikan
                                solusi apabila terdapat hambatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="fw-bold text-ajl-secondary mb-3">Our Blog</h2>
                    <p>Blog Kami Memberikan Informasi Mengenai Layanan Kami</p>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm rounded-0 h-100">
                        <div class="row g-0">
                            <div class="col-lg-4 bg-home"
                                style="background-image: url('{{ asset('frontend/assets/gudang.png') }}'); height: 300px;">
                            </div>

                            <div class="col-lg-8">
                                <div class="p-3">
                                    <h5 class="fw-bold text-dark mb-3">Logistik dan Rantai Pasok Halal</h5>
                                    <div class="mb-2 d-flex align-items-center text-muted small">
                                        <i class="bi bi-calendar-date me-3"></i>
                                        <small>28 Februari 2024</small>
                                    </div>
                                    <div class="mb-2 d-flex align-items-center text-muted small">
                                        <i class="bi bi-person me-3"></i>
                                        <small> Arkan Muhammad Faizulhaq</small>
                                    </div>
                                    <p class="card-text">Peningkatan tren permintaan terhadap halal produk membuat logistik
                                        halal
                                        diimplementasikan oleh banyak negara seperti Indonesia</p>
                                    <a href="https://supplychainindonesia.com/logistik-dan-rantai-pasok-halal/"
                                        class="text-ajl-primary fw-semibold">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm rounded-0 h-100">
                        <div class="row g-0">
                            <div class="col-lg-4 bg-home"
                                style="background-image: url('{{ asset('frontend/assets/fuso-box.png') }}'); height: 300px;">
                            </div>
                            <div class="col-lg-8">
                                <div class="p-3">
                                    <h5 class="fw-bold text-dark mb-3">Dukungan Jasa Logistik dalam Jaminan Produk Halal
                                    </h5>
                                    <div class="mb-2 d-flex align-items-center text-muted small">
                                        <i class="bi bi-calendar-date me-3"></i>
                                        <small>11 Juli 2023</small>
                                    </div>
                                    <div class="mb-2 d-flex align-items-center text-muted small">
                                        <i class="bi bi-person me-3"></i>
                                        <small> Yana</small>
                                    </div>
                                    <p class="card-text">Jasa logistik termasuk jasa yang ikut bertanggung jawab dalam
                                        mengendalikan kegiatan penyimpanan, transportasi, dan pendistribusian di luar
                                        pabrikan.</p>
                                    <a href="https://halalmui.org/dukungan-jasa-logistik-dalam-jaminan-produk-halal/"
                                        class="text-ajl-primary fw-semibold">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
