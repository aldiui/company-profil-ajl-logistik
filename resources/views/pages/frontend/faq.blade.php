@extends('layouts.frontend')

@section('title', 'FAQ')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">@yield('title')</h3>
            </div>
            <div class="col-12 mb-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0 mb-3 rounded-0">
                        <h2 class="accordion-header border-bottom border-3 border-ajl-primary">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                Apa keunggulan {{ config('app.name') }} ?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ config('app.name') }} terus meningkatkan efisiensi dan mengoptimalkan biaya
                                logistik
                                berdasarkan standar operasional yang tinggi, sistem transportasi dan distribusi gudang
                                yang kuat, dan aplikasi logistik yang canggih, untuk meningkatkan nilai distribusi
                                bisnis bagi pelanggan dan menciptakan pengalaman logistik terbaik.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-0">
                        <h2 class="accordion-header border-bottom border-3 border-ajl-primary">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                Bagaimanan sistem pembayaran {{ config('app.name') }} ?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Untuk pelanggan non-corporate, pembayaran dapat dilakukan secara tunai ketika paket
                                diserahkan ke drop point.Bagi pelanggan corporate, sistem pembayaran dapat dilakukan dengan
                                syarat dan ketentuan yang khusus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-0">
                        <h2 class="accordion-header border-bottom border-3 border-ajl-primary">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FaqThree" aria-expanded="false" aria-controls="FaqThree">
                                Bagaimana dan Kapan Anda mendapatkan resi ?
                            </button>
                        </h2>
                        <div id="FaqThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Nomor resi akan diberikan langsung oleh pihak {{ config('app.name') }} pada saat paket
                                dikirimkan melalui
                                drop point.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-0">
                        <h2 class="accordion-header border-bottom border-3 border-ajl-primary">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#FaqFour" aria-expanded="false" aria-controls="FaqFour">
                                Apa yang terjadi jika customer paket yang berisikan barang berbahaya ?
                            </button>
                        </h2>
                        <div id="FaqFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bagi customer yang dengan sengaja mengirimkan barang yang dilarang atau barang berbahaya
                                maka berdasarkan Pasal 47 UU No. 38 Th. 2009, customer akan dipidana dengan hukuman penjara
                                paling lama 5 (lima) tahun atau denda paling banyak Rp. 1.000.000.000,- (Satu Miliar Rupiah)
                                dan pihak penyedia jasa pengiriman ({{ config('app.name') }}) tidak bisa dikenakan
                                pertanggungjawaban atas
                                kejadian tersebut.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@push('scripts')
@endpush
