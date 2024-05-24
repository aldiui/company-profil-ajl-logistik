<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class CityController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $cities = City::all();
            if ($request->mode == "datatable") {
                return DataTables::of($cities)
                    ->addColumn('aksi', function ($kota) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/city/' . $kota->id . '`, [`id`,`kode`, `nama`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/city/' . $kota->id . '`, `city-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi'])
                    ->make(true);
            }

            return $this->successResponse($cities, 'Data Kota ditemukan.');
        }

        return view('pages.backend.city.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:cities,kode',
            'nama' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $kota = City::create($request->only(['kode', 'nama']));
        return $this->successResponse($kota, 'Data Kota ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $kota = City::find($id);

            if (!$kota) {
                return $this->errorResponse(null, 'Data Kota tidak ditemukan.', 404);
            }

            return $this->successResponse($kota, 'Data Kota ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:cities,kode,' . $id,
            'nama' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $kota = City::find($id);

        if (!$kota) {
            return $this->errorResponse(null, 'Data Kota tidak ditemukan.', 404);
        }

        $kota->update($request->only(['kode', 'nama']));
        return $this->successResponse($kota, 'Data Kota diperbarui.');
    }

    public function destroy($id)
    {
        $kota = City::find($id);

        if (!$kota) {
            return $this->errorResponse(null, 'Data Kota tidak ditemukan.', 404);
        }

        $kota->delete();
        return $this->successResponse(null, 'Data Kota dihapus.');
    }
}
