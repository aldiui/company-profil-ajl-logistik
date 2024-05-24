<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TruckingPrice;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class TruckingPriceController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $truckingPrices = TruckingPrice::all();
            if ($request->mode == "datatable") {
                return DataTables::of($truckingPrices)
                    ->addColumn('aksi', function ($truckingPrice) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/trucking-price/' . $truckingPrice->id . '`, [`id`,`rute`, `blind_van`, `cde_box`, `cdd_box`, `fuso_box`, `wing_box`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/trucking-price/' . $truckingPrice->id . '`, `trucking-price-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addColumn('blind_van', function ($truckingPrice) {
                        return formatRupiah($truckingPrice->blind_van);
                    })
                    ->addColumn('cde_box', function ($truckingPrice) {
                        return formatRupiah($truckingPrice->cde_box);
                    })
                    ->addColumn('cdd_box', function ($truckingPrice) {
                        return formatRupiah($truckingPrice->cdd_box);
                    })
                    ->addColumn('fuso_box', function ($truckingPrice) {
                        return formatRupiah($truckingPrice->fuso_box);
                    })
                    ->addColumn('wing_box', function ($truckingPrice) {
                        return formatRupiah($truckingPrice->wing_box);
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi', 'blind_van', 'cde_box', 'cdd_box', 'fuso_box', 'wing_box'])
                    ->make(true);
            }

            return $this->successResponse($truckingPrices, 'Data Harga Trucking ditemukan.');
        }

        return view('pages.backend.trucking-price.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rute' => 'required|string|unique:trucking_prices,rute',
            'blind_van' => 'required|numeric',
            'cde_box' => 'required|numeric',
            'cdd_box' => 'required|numeric',
            'fuso_box' => 'required|numeric',
            'wing_box' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $truckingPrice = TruckingPrice::create($request->only(['rute', 'blind_van', 'cde_box', 'cdd_box', 'fuso_box', 'wing_box']));
        return $this->successResponse($truckingPrice, 'Data   Harga Trucking ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $truckingPrice = TruckingPrice::find($id);

            if (!$truckingPrice) {
                return $this->errorResponse(null, 'Data   Harga Trucking tidak ditemukan.', 404);
            }

            return $this->successResponse($truckingPrice, 'Data   Harga Trucking ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'rute' => 'required|string|unique:trucking_prices,rute,' . $id,
            'blind_van' => 'required|numeric',
            'cde_box' => 'required|numeric',
            'cdd_box' => 'required|numeric',
            'fuso_box' => 'required|numeric',
            'wing_box' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $truckingPrice = TruckingPrice::find($id);

        if (!$truckingPrice) {
            return $this->errorResponse(null, 'Data   Harga Trucking tidak ditemukan.', 404);
        }

        $truckingPrice->update($request->only(['rute', 'blind_van', 'cde_box', 'cdd_box', 'fuso_box', 'wing_box']));
        return $this->successResponse($truckingPrice, 'Data   Harga Trucking diperbarui.');
    }

    public function destroy($id)
    {
        $truckingPrice = TruckingPrice::find($id);

        if (!$truckingPrice) {
            return $this->errorResponse(null, 'Data   Harga Trucking tidak ditemukan.', 404);
        }

        $truckingPrice->delete();
        return $this->successResponse(null, 'Data Harga Trucking dihapus.');
    }
}