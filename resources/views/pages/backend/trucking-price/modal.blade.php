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
                        <label for="rute" class="form-label">Rute <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="rute" name="rute">
                        <small class="invalid-feedback" id="errorrute"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="blind_van" class="form-label">Blind Van <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="blind_van" name="blind_van">
                        <small class="invalid-feedback" id="errorblind_van"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cde_box" class="form-label">CDE Box <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="cde_box" name="cde_box">
                        <small class="invalid-feedback" id="errorcde_box"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="cdd_box" class="form-label">CDD Box <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="cdd_box" name="cdd_box">
                        <small class="invalid-feedback" id="errorcdd_box"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="fuso_box" class="form-label">Fuso Box <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="fuso_box" name="fuso_box">
                        <small class="invalid-feedback" id="errorfuso_box"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="wing_box" class="form-label">Wing Box <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="wing_box" name="wing_box">
                        <small class="invalid-feedback" id="errorwing_box"></small>
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
