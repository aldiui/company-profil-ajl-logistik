<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Corporate;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class OrderCorporateController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orderCorporates = Corporate::all();
            if ($request->mode == "datatable") {
                return DataTables::of($orderCorporates)
                    ->addColumn('aksi', function ($corporate) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/order-corporate/' . $corporate->id . '`, [`id`,`nama_perusahaan`, `nama_pic`, `email`, `no_handphone`, `alamat_kantor`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/order-corporate/' . $corporate->id . '`, `order-corporate-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi'])
                    ->make(true);
            }

            return $this->successResponse($orderCorporates, 'Data Order Corporate ditemukan.');
        }

        return view('pages.backend.order-corporate.index');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $corporate = Corporate::find($id);

            if (!$corporate) {
                return $this->errorResponse(null, 'Data Order Corporate tidak ditemukan.', 404);
            }

            return $this->successResponse($corporate, 'Data Order Corporate ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_perusahaan' => 'required|min:3',
            'nama_pic' => 'required|min:3',
            'email' => 'required|email',
            'no_handphone' => 'required',
            'alamat_kantor' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $corporate = Corporate::find($id);

        if (!$corporate) {
            return $this->errorResponse(null, 'Data Order Corporate tidak ditemukan.', 404);
        }

        $corporate->update($request->only(['nama_perusahaan', 'nama_pic', 'email', 'no_handphone', 'alamat_kantor']));
        return $this->successResponse($corporate, 'Data Order Corporate diperbarui.');
    }

    public function destroy($id)
    {
        $corporate = Corporate::find($id);

        if (!$corporate) {
            return $this->errorResponse(null, 'Data Order Corporate tidak ditemukan.', 404);
        }

        $corporate->delete();
        return $this->successResponse(null, 'Data Order Corporate dihapus.');
    }
}
