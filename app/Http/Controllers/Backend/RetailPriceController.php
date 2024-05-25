<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\DistributionCenter;
use App\Models\RetailPrice;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class RetailPriceController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $retailPrices = RetailPrice::with('distributionCenter', 'city')->get();
            if ($request->mode == "datatable") {
                return DataTables::of($retailPrices)
                    ->addColumn('aksi', function ($retailPrice) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getSelectEdit(), getModal(`createModal`, `/admin/retail-price/' . $retailPrice->id . '`, [`id`,`distribution_center_id`,`city_id`,`harga_dibawah_tujuh_puluh`,`harga_diatas_tujuh_puluh`,`estimasi_hari`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/retail-price/' . $retailPrice->id . '`, `retail-price-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addColumn('harga_dibawah_tujuh_puluh', function ($retailPrice) {
                        return formatRupiah($retailPrice->harga_dibawah_tujuh_puluh);
                    })
                    ->addColumn('harga_diatas_tujuh_puluh', function ($retailPrice) {
                        return formatRupiah($retailPrice->harga_diatas_tujuh_puluh);
                    })
                    ->addColumn('estimasi_hari', function ($retailPrice) {
                        return $retailPrice->estimasi_hari . ' Hari';
                    })
                    ->addColumn('distribution_center', function ($retailPrice) {
                        return $retailPrice->distributionCenter->nama;
                    })
                    ->addColumn('city', function ($retailPrice) {
                        return $retailPrice->city->nama;
                    })
                    ->addColumn('city_code', function ($retailPrice) {
                        return $retailPrice->city->kode;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi', 'harga_dibawah_tujuh_puluh', 'harga_diatas_tujuh_puluh', 'estimasi_hari', 'distribution_center', 'city', 'city_code'])
                    ->make(true);
            }

            return $this->successResponse($retailPrices, 'Data Harga Retail ditemukan.');
        }

        return view('pages.backend.retail-price.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'distribution_center_id' => 'required|exists:distribution_centers,id',
            'city_id' => 'required|exists:cities,id',
            'harga_dibawah_tujuh_puluh' => 'required|numeric',
            'harga_diatas_tujuh_puluh' => 'required|numeric',
            'estimasi_hari' => 'required|numeric',
        ], [
            'distribution_center_id.required' => 'Origin harus diisi.',
            'distribution_center_id.exists' => 'Origin tidak valid.',
            'city_id.required' => 'Destination Kota harus diisi.',
            'city_id.exists' => 'Destination Kota tidak valid.',
            'harga_dibawah_tujuh_puluh.numeric' => 'Harga 0 - 70 Kg  harus berupa angka.',
            'harga_diatas_tujuh_puluh.numeric' => 'Harga 71+ Kg  harus berupa angka.',
            'harga_dibawah_tujuh_puluh.required' => 'Harga 0 - 70 Kg  harus diisi.',
            'harga_diatas_tujuh_puluh.required' => 'Harga 71+ Kg  harus diisi.',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $cekRetailPrice = RetailPrice::where('distribution_center_id', $request->distribution_center_id)->where('city_id', $request->city_id)->first();

        if ($cekRetailPrice) {
            return $this->errorResponse(null, 'Data Harga Retail sudah ada.', 409);
        }

        $retailPrice = RetailPrice::create($request->only(['distribution_center_id', 'city_id', 'harga_dibawah_tujuh_puluh', 'harga_diatas_tujuh_puluh', 'estimasi_hari']));
        return $this->successResponse($retailPrice, 'Data Harga Retail ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $retailPrice = RetailPrice::find($id);

            if (!$retailPrice) {
                return $this->errorResponse(null, 'Data Harga Retail tidak ditemukan.', 404);
            }

            return $this->successResponse($retailPrice, 'Data Harga Retail ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'distribution_center_id' => 'required|exists:distribution_centers,id',
            'city_id' => 'required|exists:cities,id',
            'harga_dibawah_tujuh_puluh' => 'required|numeric',
            'harga_diatas_tujuh_puluh' => 'required|numeric',
            'estimasi_hari' => 'required|numeric',
        ], [
            'distribution_center_id.required' => 'Origin harus diisi.',
            'distribution_center_id.exists' => 'Origin tidak valid.',
            'city_id.required' => 'Destination Kota harus diisi.',
            'city_id.exists' => 'Destination Kota tidak valid.',
            'harga_dibawah_tujuh_puluh.numeric' => 'Harga 0 - 70 Kg  harus berupa angka.',
            'harga_diatas_tujuh_puluh.numeric' => 'Harga 71+ Kg  harus berupa angka.',
            'harga_dibawah_tujuh_puluh.required' => 'Harga 0 - 70 Kg  harus diisi.',
            'harga_diatas_tujuh_puluh.required' => 'Harga 71+ Kg  harus diisi.',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $retailPrice = RetailPrice::find($id);

        if (!$retailPrice) {
            return $this->errorResponse(null, 'Data Harga Retail tidak ditemukan.', 404);
        }

        $cekRetailPrice = RetailPrice::where('distribution_center_id', $request->distribution_center_id)->where('city_id', $request->city_id)->where('id', '!=', $id)->first();

        if ($cekRetailPrice) {
            return $this->errorResponse(null, 'Data Harga Retail sudah ada.', 409);
        }

        $retailPrice->update($request->only(['distribution_center_id', 'city_id', 'harga_dibawah_tujuh_puluh', 'harga_diatas_tujuh_puluh', 'estimasi_hari']));
        return $this->successResponse($retailPrice, 'Data Harga Retail diperbarui.');
    }

    public function destroy($id)
    {
        $retailPrice = RetailPrice::find($id);

        if (!$retailPrice) {
            return $this->errorResponse(null, 'Data Harga Retail tidak ditemukan.', 404);
        }

        $retailPrice->delete();
        return $this->successResponse(null, 'Data Harga Retail dihapus.');
    }
}
