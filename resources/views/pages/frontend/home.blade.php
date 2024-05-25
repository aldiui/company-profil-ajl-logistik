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
                    <div class="card shadow-sm rounded-0">
                        <img src="{{ asset('frontend/assets/laut.jpg') }}" class="img-fluid custom-img rounded-0"
                            alt="Laut - Our Logistics Services - {{ config('app.name') }} - Sea Transport">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-dark mb-0">Laut</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-0">
                        <img src="{{ asset('frontend/assets/darat.png') }}" class="img-fluid custom-img rounded-0"
                            alt="Darat - Our Logistics Services - {{ config('app.name') }} - Land Transport">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-dark mb-0">Darat</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-0">
                        <img src="{{ asset('frontend/assets/udara.jpg') }}" class="img-fluid custom-img rounded-0"
                            alt="Udara - Our Logistics Services - {{ config('app.name') }} - Air Transport">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-dark mb-0">Udara</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm rounded-0">
                        <img src="{{ asset('frontend/assets/kereta.jpg') }}" class="img-fluid custom-img rounded-0"
                            alt="Kereta - Our Logistics Services - {{ config('app.name') }} - Train Transport">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-dark mb-0">Kereta</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-ajl-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 mb-3">
                    <img src="{{ asset('frontend/assets/truck1.png') }}" class="img-fluid px-4"
                        alt="Truck - {{ config('app.name') }} - Truck Transport">
                </div>
                <div class="col-lg-6 mb-3 text-center text-lg-start">
                    <h2 class="fw-bold text-white text-ajl-secondary text-shadow mb-3">We Provide Shipping To Anywhere</h2>
                    <p class="text-white">We Offer Fast And Reliable Shipping Services For Domestic And International Shipments With Land, Sea, Air Fleets Safely And On Time</p>
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
                    <div class="card shadow-sm border-ajl-primary h-100 p-2">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Fast Delivery</h6>
                            <div class="mb-2">
                                <i class="bi bi-clock text-ajl-primary fs-1"></i>
                            </div>
                            <p class="mb-0">Barang Anda akan tiba sesuai estimasi, dengan tepat waktu dan aman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card shadow-sm border-ajl-primary h-100 p-2">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">GPS Tracking</h6>
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
                    <div class="card shadow-sm border-ajl-primary h-100 p-2">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Affordable</h6>
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
                    <div class="card shadow-sm border-ajl-primary h-100 p-2">
                        <div class="card-body text-center">
                            <h6 class="fw-bold text-ajl-primary mb-3">Good Services</h6>
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
@endsection

@push('scripts')
@endpush
