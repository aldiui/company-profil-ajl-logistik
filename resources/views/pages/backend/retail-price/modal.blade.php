<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span id="label-modal"></span> Data @yield('title')
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="saveData" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" id="id">
                    <div class="form-group mb-3">
                        <label for="distribution_center_id" class="form-label">Origin <span
                                class="text-danger">*</span></label>
                        <select class="form-control" id="distribution_center_id" name="distribution_center_id"></select>
                        <small class="invalid-feedback" id="errordistribution_center_id">
                        </small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="city_id" class="form-label">Destination Kota <span
                                class="text-danger">*</span></label>
                        <select class="form-control" id="city_id" name="city_id"></select>
                        <small class="invalid-feedback" id="errorcity_id"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_dibawah_tujuh_puluh" class="form-label">Harga 0 - 70 Kg <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="harga_dibawah_tujuh_puluh"
                            name="harga_dibawah_tujuh_puluh">
                        <small class="invalid-feedback" id="errorharga_dibawah_tujuh_puluh"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_diatas_tujuh_puluh" class="form-label">Harga 71+ Kg <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="harga_diatas_tujuh_puluh"
                            name="harga_diatas_tujuh_puluh">
                        <small class="invalid-feedback" id="errorharga_diatas_tujuh_puluh"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="estimasi_hari" class="form-label">Estimasi Hari <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="estimasi_hari" name="estimasi_hari">
                        <small class="invalid-feedback" id="errorestimasi_hari"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
