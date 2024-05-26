@extends('layouts.frontend')

@section('title', 'Video')

@push('style')
@endpush

@section('main')
    <header class="container py-5 min-vh-100">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold text-ajl-secondary mb-4">@yield('title')</h3>
            </div>
        </div>
        <div class="row" id="videos">
            @include('pages.frontend.video-pagination')
        </div>
    </header>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            getVideos(page);
        });

        const getVideos = (page) => {
            $.ajax({
                url: "/video?page=" + page,
            }).done(function(data) {
                $("#videos").html(data);
            });
        };
    </script>
@endpush
