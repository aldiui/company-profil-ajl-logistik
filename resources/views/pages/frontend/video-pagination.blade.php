@forelse  ($videos as $row)
    <div class="col-md-6 mb-3">
        <div class="ratio ratio-16x9 mb-2" style="height: 300px;">
            <iframe class="img-fluid w-100" src="{{ convertToEmbedUrl($row->link) }}" allowfullscreen></iframe>
        </div>
        <div class="mb-2 d-flex align-items-center text-muted small">
            <i class="bi bi-calendar-date me-2"></i>
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
            <div class="fw-semibold">@yield('title') Tidak Ada Data</div>=
        </div>
    </div>
@endforelse
<div class="col-12">
    <div class="d-flex justify-content-center">
        {!! $videos->links() !!}
    </div>
</div>
