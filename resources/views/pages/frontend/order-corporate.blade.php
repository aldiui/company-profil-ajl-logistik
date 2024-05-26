@extends('layouts.frontend')

@section('title', 'Order Corporate')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.css') }}">
@endpush

@section('main')
    <header class="py-5 min-vh-100">
        <div class="container">
            <div class="row justify-content-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mb-3 text-center text-lg-start">
                    <h2 class="fw-bold text-white text-ajl-secondary mb-3">@yield('title')</h2>
                    <p>Untuk para pelanggan corporate yang ingin pembayaran lebih fleksibel (TOP ataupun tempo) silahkan isi
                        form berikut ini atau hubungi 082281018776 (Customer Corporate)</p>

                    <form id="orderCorporate" class="my-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="nama_perusahaan" class="form-label">Nama Perusahaan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                        placeholder="Masukan Nama Perusahaan">
                                    <small class="invalid-feedback" id="errornama_perusahaan"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="nama_pic" class="form-label">Nama Pic <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama_pic" name="nama_pic"
                                        placeholder="Masukan Nama PIC">
                                    <small class="invalid-feedback" id="errornama_pic"></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukan Email">
                                    <small class="invalid-feedback" id="erroremail"></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="no_handphone" class="form-label">No Handphone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="no_handphone" name="no_handphone"
                                        placeholder="Masukan No Handphone">
                                    <small class="invalid-feedback" id="errornama_no_handphone"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="alamat_kantor" class="form-label">Alamat Kantor <span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"></textarea>
                                    <small class="invalid-feedback" id="erroralamat_kantor"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-ajl-primary d-block w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mb-4 text-center">
                    <div class="px-3">
                        <img src="{{ asset('frontend/assets/gudang-2.png') }}" class="img-fluid rounded-4 shadow"
                            alt="Gudang - {{ config('app.name') }}">
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@push('scripts')
    <script src="{{ asset('backend/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#orderCorporate").submit(function(e) {
                setButtonLoadingState("#orderCorporate .btn-ajl-primary", true);
                e.preventDefault();
                const url = "{{ route('order-corporate') }}";
                const data = new FormData(this);

                const successCallback = function(response) {
                    setButtonLoadingState("#orderCorporate .btn-ajl-primary", false);
                    handleSuccess(response, null, null, response.data.link);
                };

                const errorCallback = function(error) {
                    setButtonLoadingState("#orderCorporate .btn-ajl-primary", false);
                    handleValidationErrors(error, "orderCorporate", ['nama_perusahaan', 'nama_pic',
                        'email', 'no_handphone', 'alamat_kantor'
                    ]);
                };

                ajaxCall(url, "POST", data, successCallback, errorCallback);
            });
        });
    </script>
@endpush
