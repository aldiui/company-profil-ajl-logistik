@forelse ($galeries as $row)
    <div class="col-md-6 col-lg-4 mb-3">
        <img src="{{ asset('storage/galery/' . $row->foto) }}" class="img-fluid custom-img mb-3"
            alt="Foto -{{ config('app.name') }}">
        <div class="mb-2 d-flex align-items-center text-muted small">
            <i class="bi bi-linkedin  me-2"></i>
            <span>{{ formatTanggal($row->created_at, 'd F Y') }}</span>
        </div>
        <p class="fw-semibold text-dark mb-0">{{ $row->judul }}</p>
    </div>
@empty
    <div class="col-12">
        <div class="text-center text-danger my-5 py-5">
            <div class="mb-3">
                <i class="bi bi-trash fs-1 text-lg"></i>
            </div>
            <div class="fw-semibold">@yield('title') Tidak Ada Data</div>
        </div>
    </div>
@endforelse
<div class="col-12">
    <div class="d-flex justify-content-center">
        {!! $galeries->links() !!}
    </div>
</div>