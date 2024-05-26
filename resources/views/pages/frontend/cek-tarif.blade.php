@extends('layouts.frontend')

@section('title', 'Cek Tarif')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@section('main')
    <header class="py-5 min-vh-100">
        <div class="container">
            <h3 class="fw-bold text-center text-ajl-secondary mb-4">@yield('title')</h3>
            <form id="cekTarif" class="mb-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Retail">Retail</option>
                                <option value="Trucking">Trucking</option>
                            </select>
                            <small class="invalid-feedback" id="errorkategori"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="kota_asal" class="form-label">Kota Asal</label>
                            <select class="form-control" id="kota_asal" name="kota_asal">
                            </select>
                            <small class="invalid-feedback" id="errorkota_asal"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                            <select class="form-control" id="kota_tujuan" name="kota_tujuan">
                            </select>
                            <small class="invalid-feedback" id="errorkota_tujuan"></small>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-ajl-primary d-block w-100">Cek Tarif</button>
                    </div>
                </div>
            </form>
            <div id="hasilTarif" class="py-5"></div>
        </div>
        </div>
    </header>
@endsection

@push('scripts')
    <script src="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#cekTarif").submit(function(e) {
                setButtonLoadingState("#cekTarif .btn-ajl-primary", true);
                e.preventDefault();
                const url = "{{ route('cek-tarif') }}";
                const data = new FormData(this);

                const successCallback = function(response) {
                    setButtonLoadingState("#cekTarif .btn-ajl-primary", false);
                    $('#hasilTarif').html(response.data);
                };

                const errorCallback = function(error) {
                    setButtonLoadingState("#cekTarif .btn-ajl-primary", false);
                    handleValidationErrors(error, "cekTarif", ['kategori', 'kota_asal', 'kota_tujuan']);
                    $('#hasilTarif').html(null);
                };

                ajaxCall(url, "POST", data, successCallback, errorCallback);
            });

        });

        $("#kategori").on("change", function() {
            let cekKategori = $("#kategori").val();
            if (cekKategori) {
                select2ToJson("#kota_asal", `/kota-asal/${cekKategori}`, "no");
                select2ToJson("#kota_tujuan", `/kota-tujuan/${cekKategori}`, "no");
            } else {
                $("#kota_asal").val(null).trigger('change');
                $("#kota_tujuan").val(null).trigger('change');
            }
        });
    </script>
@endpush
