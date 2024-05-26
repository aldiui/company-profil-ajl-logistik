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
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                        <small class="invalid-feedback" id="errornama_perusahaan"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_pic" class="form-label">Nama Pic <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_pic" name="nama_pic">
                        <small class="invalid-feedback" id="errornama_pic"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email">
                        <small class="invalid-feedback" id="erroremail"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_handphone" class="form-label">No Handphone <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone">
                        <small class="invalid-feedback" id="errornama_no_handphone"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat_kantor" class="form-label">Alamat Kantor <span
                                class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"></textarea>
                        <small class="invalid-feedback" id="erroralamat_kantor"></small>
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
