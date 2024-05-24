<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $stores = Store::all();
            if ($request->mode == "datatable") {
                return DataTables::of($stores)
                    ->addColumn('aksi', function ($store) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/store/' . $store->id . '`, [`id`,`kode`, `nama`, `whatsapp`, `lokasi`, `alamat`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/store/' . $store->id . '`, `store-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi'])
                    ->make(true);
            }

            return $this->successResponse($stores, 'Data Store ditemukan.');
        }

        return view('pages.backend.store.index', compact('store'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:stores,kode',
            'nama' => 'required|string',
            'whatsapp' => 'required|string',
            'lokasi' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $store = Store::create($request->only(['kode', 'nama', 'whatsapp', 'lokasi', 'alamat']));
        return $this->successResponse($store, 'Data Store ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $store = Store::find($id);

            if (!$store) {
                return $this->errorResponse(null, 'Data Store tidak ditemukan.', 404);
            }

            return $this->successResponse($store, 'Data Store ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:stores,kode,' . $id,
            'nama' => 'required|string',
            'whatsapp' => 'required|string',
            'lokasi' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $store = Store::find($id);

        if (!$store) {
            return $this->errorResponse(null, 'Data Store tidak ditemukan.', 404);
        }

        $store->update($request->only(['kode', 'nama', 'whatsapp', 'lokasi', 'alamat']));
        return $this->successResponse($store, 'Data Store diperbarui.');
    }

    public function destroy($id)
    {
        $store = Store::find($id);

        if (!$store) {
            return $this->errorResponse(null, 'Data Store tidak ditemukan.', 404);
        }

        $store->delete();
        return $this->successResponse(null, 'Data Store dihapus.');
    }
}
