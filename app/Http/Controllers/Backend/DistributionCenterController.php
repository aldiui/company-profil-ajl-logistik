<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DistributionCenter;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class DistributionCenterController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dcs = DistributionCenter::all();
            if ($request->mode == "datatable") {
                return DataTables::of($dcs)
                    ->addColumn('aksi', function ($dc) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/distribution-center/' . $dc->id . '`, [`id`,`kode`, `nama`, `telepon`, `alamat`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/distribution-center/' . $dc->id . '`, `distribution-center-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi'])
                    ->make(true);
            }

            return $this->successResponse($dcs, 'Data Distribution Center ditemukan.');
        }

        return view('pages.backend.distribution-center.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:distribution_centers,kode',
            'nama' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $dc = DistributionCenter::create($request->only(['kode', 'nama', 'telepon', 'alamat']));
        return $this->successResponse($dc, 'Data Distribution Center ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $dc = DistributionCenter::find($id);

            if (!$dc) {
                return $this->errorResponse(null, 'Data Distribution Center tidak ditemukan.', 404);
            }

            return $this->successResponse($dc, 'Data Distribution Center ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:distribution_centers,kode,' . $id,
            'nama' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $dc = DistributionCenter::find($id);

        if (!$dc) {
            return $this->errorResponse(null, 'Data Distribution Center tidak ditemukan.', 404);
        }

        $dc->update($request->only(['kode', 'nama', 'telepon', 'alamat']));
        return $this->successResponse($dc, 'Data Distribution Center diperbarui.');
    }

    public function destroy($id)
    {
        $dc = DistributionCenter::find($id);

        if (!$dc) {
            return $this->errorResponse(null, 'Data Distribution Center tidak ditemukan.', 404);
        }

        $dc->delete();
        return $this->successResponse(null, 'Data Distribution Center dihapus.');
    }
}
