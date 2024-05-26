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
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
                        <input type="file" name="foto" id="foto" class="dropify" data-height="200">
                        <small class="invalid-feedback" id="errorfoto"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" id="judul" name="judul"></textarea>
                        <small class="invalid-feedback" id="errorjudul"></small>
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
