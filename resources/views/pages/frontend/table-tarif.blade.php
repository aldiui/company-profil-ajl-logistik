@if ($kategori == 'Retail')
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="retail-price-table" width="100%">
            <thead class="text-center">
                <tr>
                    <th>Origin</th>
                    <th>Destination Kota</th>
                    <th>Kode</th>
                    <th>Harga 0-70 Kg</th>
                    <th>Harga 71+ Kg</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($tarif)
                    <tr>
                        <td>{{ $tarif->distributionCenter->nama }}</td>
                        <td>{{ $tarif->city->nama }}</td>
                        <td>{{ $tarif->city->kode }}</td>
                        <td>{{ formatRupiah($tarif->harga_dibawah_tujuh_puluh) }}</td>
                        <td>{{ formatRupiah($tarif->harga_diatas_tujuh_puluh) }}</td>
                        <td>{{ $tarif->estimasi_hari }} Hari</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6" class="bg-danger bg-opacity-25">
                            <i class="bi bi-exclamation-triangle-fill me-3"></i> Data
                            Tidak
                            Ditemukan
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@else
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="retail-price-table" width="100%">
            <thead class="text-center">
                <tr>
                    <th>Rute</th>
                    <th>Blind Van</th>
                    <th>CDE Box</th>
                    <th>CDD Box</th>
                    <th>Fuso Box</th>
                    <th>Wing Box</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($tarif)
                    <tr>
                        <td>{{ $tarif->rute }}</td>
                        <td>{{ formatRupiah($tarif->blind_van) }}</td>
                        <td>{{ formatRupiah($tarif->cde_box) }}</td>
                        <td>{{ formatRupiah($tarif->cdd_box) }}</td>
                        <td>{{ formatRupiah($tarif->fuso_box) }}</td>
                        <td>{{ formatRupiah($tarif->wing_box) }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6" class="bg-danger bg-opacity-25">
                            <i class="bi bi-exclamation-triangle-fill me-3"></i> Data
                            Tidak
                            Ditemukan
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endif
