@extends('layouts.frontend')

@section('title', 'Tentang')

@push('style')
@endpush

@section('main')
    <header class="bg-home" style="background-image: url({{ asset('frontend/assets/ajl-logistik.png') }}); ">
        <div class="bg-dark bg-opacity-25">
            <div class="container">
                <div class="row align-items-center" style="height: 90vh">
                    <div class="col-12 py-3 text-center">
                        <h1 class="text-shadow mb-2 fw-bolder text-ajl-secondary">
                            Tentang PT. AJL Logistik Indonesia
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-3">
                    <img src="{{ asset('frontend/assets/team-ajl.png') }}" class="img-fluid"
                        alt="Team Ajl - {{ config('app.name') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <h2 class="fw-bold text-ajl-secondary mb-3">PT. AJL Logistik Indonesia</h2>
                    <p>PT. AJL Logistik Indonesia merupakan perusahaan yang bergerak dibidang logistik yang unggul dalam
                        memenuhi kebutuhan pelanggan. Dalam melayani kebutuhan pelanggan, kami memiliki komitmen yang tinggi
                        melalui pelayanan yang terbaik, tepat waktu dan dengan harga yang terjangkau. Layanan yang
                        ditawarkan meliputi; pengiriman dan penerimaan barang, transportasi domestik baik di udara, darat,
                        laut, trucking, retail, city courier dan warehousing, serta sistem kami dapat terintegrasi dengan
                        API (Application Programming Interface).
                    </p>
                    <p>
                        Dalam meningkatkan perkembangan perusahaan, PT. AJL Logistik Indonesia berkomitmen untuk terus
                        memberikan layanan integritas, terdepan dan terpercaya. Dengan didukung tenaga kerja yang ahli dan
                        berpengalaman di bidangnya sehingga dapat menyelesaikan pekerjaan dengan tepat waktu dan sesuai
                        standar
                        yang berlaku. Baik dari segi waktu, keamanan, informasi dan memastikan barang sampai tujuan dalam
                        keadaan baik.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mb-3">
                    <h3 class="fw-bold text-ajl-secondary mb-3">Visi</h3>
                    <p>Menjadi perusahaan logistik yang unggul dan terpercaya di Indonesia dalam
                        memenuhi kebutuhan pelanggan melalui layanan yang cepat, tepat serta berkualitas.
                    </p>
                    <h3 class="fw-bold text-ajl-secondary mb-3">Misi</h3>
                    <ul>
                        <li class="mb-2">Meningkatkan jaringan ekspor dan impor ke seluruh kawasan Indonesia dan negara
                            lain.</li>
                        <li class="mb-2">Membangun kerjasama tim untuk mewujudkan pelayanan yang terbaik.</li>
                        <li class="mb-2">Melayani pengiriman secara cepat, tepat dan aman.</li>
                        <li class="mb-2">Membantu pemerintah untuk mengurangi biaya logistik.</li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="{{ asset('frontend/assets/team-ajl-2.png') }}" class="img-fluid"
                        alt="Team Ajl - {{ config('app.name') }}">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
