@extends('layouts.backend')

@section('title', 'Distribution Center')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/compiled/css/table-datatable-jquery.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.css') }}">
@endpush

@section('main')
    <div class="content-wrapper container">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Data @yield('title')</h5>
                                <div>
                                    <button class="btn btn-success btn-sm" onclick="getModal('createModal')">
                                        <i class="bi bi-plus me-2"></i>Tambah
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="trucking-price-table" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Rute</th>
                                            <th>Blind Van</th>
                                            <th>CDE Box</th>
                                            <th>CDD Box</th>
                                            <th>Fuso Box</th>
                                            <th>Wing Box</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('pages.backend.trucking-price.modal')
@endsection

@push('scripts')
    <script src="{{ asset('backend/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            datatableCall('trucking-price-table', '{{ route('admin.trucking-price.index') }}', [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'rute',
                    name: 'rute'
                },
                {
                    data: 'blind_van',
                    name: 'blind_van'
                },
                {
                    data: 'cde_box',
                    name: 'cde_box'
                },
                {
                    data: 'cdd_box',
                    name: 'cdd_box'
                },
                {
                    data: 'fuso_box',
                    name: 'fuso_box'
                },
                {
                    data: 'wing_box',
                    name: 'wing_box'
                },
                {
                    data: 'aksi',
                    name: 'aksi'
                },
            ]);

            $("#saveData").submit(function(e) {
                setButtonLoadingState("#saveData .btn.btn-primary", true);
                e.preventDefault();
                const kode = $("#saveData #id").val();
                let url = "{{ route('admin.trucking-price.store') }}";
                const data = new FormData(this);

                if (kode !== "") {
                    data.append("_method", "PUT");
                    url = `/admin/trucking-price/${kode}`;
                }

                const successCallback = function(response) {
                    setButtonLoadingState("#saveData .btn.btn-primary", false);
                    handleSuccess(response, "trucking-price-table", "createModal");
                };

                const errorCallback = function(error) {
                    setButtonLoadingState("#saveData .btn.btn-primary", false);
                    handleValidationErrors(error, "saveData", ["rute", "blind_van", "cde_box",
                        "cdd_box",
                        "fuso_box", "wing_box"
                    ]);
                };

                ajaxCall(url, "POST", data, successCallback, errorCallback);
            });
        });
    </script>
@endpush
