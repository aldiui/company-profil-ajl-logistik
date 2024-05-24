<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $tarifs = Tarif::with('store')->get();
            if ($request->mode == "datatable") {
                return DataTables::of($tarifs)
                    ->addColumn('aksi', function ($tarif) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/store/' . $tarif->id . '`, [`id`,`kode`, `nama`, `whatsapp`, `lokasi`, `alamat`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/store/' . $tarif->id . '`, `store-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addColumn('kota_awal', function ($tarif) {
                        return $tarif->store->nama;
                    })

                    ->addIndexColumn()
                    ->rawColumns(['aksi', 'kota_awal'])
                    ->make(true);
            }

            return $this->successResponse($tarifs, 'Data Tarif ditemukan.');
        }

        return view('pages.backend.tarif.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_id' => 'required|integer|exists:stores,id',
            'kota_tujuan' => 'required|string|in:' . implode(',', kotaIndonesia()),
            'keterangan' => 'nullable|string',
            'jalur' => 'required|string',
            'berat' => 'required|integer',
            'estimasi' => 'required|string',
            'harga' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $cekTarif = Tarif::whereStoreId($request->store_id)->whereKotaTujuan($request->kota_tujuan)->first();
        if ($cekTarif) {
            return $this->errorResponse(null, 'Data Tarif sudah ada.', 409);
        }

        $tarif = Tarif::create($request->only(['store_id', 'kota_tujuan', 'keterangan', 'jalur', 'berat', 'estimasi', 'harga']));

        return $this->successResponse($tarif, 'Data Tarif ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $tarif = Tarif::find($id);

            if (!$tarif) {
                return $this->errorResponse(null, 'Data Tarif tidak ditemukan.', 404);
            }

            return $this->successResponse($tarif, 'Data Tarif ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'store_id' => 'required|integer|exists:stores,id',
            'kota_tujuan' => 'required|string|in:' . implode(',', kotaIndonesia()),
            'keterangan' => 'nullable|string',
            'jalur' => 'required|string',
            'berat' => 'required|integer',
            'estimasi' => 'required|string',
            'harga' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $tarif = Tarif::find($id);

        if (!$tarif) {
            return $this->errorResponse(null, 'Data Tarif tidak ditemukan.', 404);
        }

        $cekTarif = Tarif::whereStoreId($request->store_id)->whereKotaTujuan($request->kota_tujuan)->where('id', '!=', $id)->first();
        if ($cekTarif) {
            return $this->errorResponse(null, 'Data Tarif sudah ada.', 409);
        }

        $tarif->update($request->only(['store_id', 'kota_tujuan', 'keterangan', 'jalur', 'berat', 'estimasi', 'harga']));

        return $this->successResponse($tarif, 'Data Tarif diubah.');
    }

    public function destroy($id)
    {
        $tarif = Tarif::find($id);

        if (!$tarif) {
            return $this->errorResponse(null, 'Data Tarif tidak ditemukan.', 404);
        }

        $tarif->delete();

        return $this->successResponse(null, 'Data Tarif dihapus.');

    }
}
