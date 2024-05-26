
@extends('layouts.frontend')

@section('title', 'Galery')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">@yield('title')</h3>
            </div>
        </div>
        <div class="row" id="galeries">
            @include('pages.frontend.galery-pagination')
        </div>
    </header>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            getGaleries(page);
        });

        const getGaleries = (page) => {
            $.ajax({
                url: "/galery?page=" + page,
            }).done(function(data) {
                $("#galeries").html(data);
            });
        };
    </script>
@endpush
