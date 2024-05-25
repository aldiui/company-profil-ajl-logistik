<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="AJL Logistik menyediakan solusi logistik yang andal dan efisien untuk kebutuhan pengiriman barang Anda." />
    <meta name="author" content="AJL Logistik" />
    <meta name="keywords"
        content="logistik, pengiriman barang, transportasi, manajemen logistik, distribusi, AJL Logistik" />
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    @stack('style')
</head>

<body id="#">
    <div id="arrowButton" class="me-lg-5 visible">
        <div class="d-flex flex-lg-row flex-column">
            <a href="#" class="btn btn-light bg-white shadow-none btn-sm border-ajl-secondary">
                <i class="bi bi-arrow-up text-ajl-secondary fw-bold"></i>
            </a>
        </div>
    </div>
    <main class="flex-shrink-0">
        @include('components.header-frontend')
        @yield('main')
    </main>
    @include('components.footer-frontend')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    @stack('scripts')
</body>

</html>
