<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('backend/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/compiled/css/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/static/css/style.css') }}">
    @stack('style')
</head>

<body>
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('backend/extensions/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/compiled/js/app.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('backend/static/js/custom.js') }}"></script>
</body>

</html>
