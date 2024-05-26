<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class GaleryController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $galeries = Galery::all();
            if ($request->mode == "datatable") {
                return DataTables::of($galeries)
                    ->addColumn('aksi', function ($galery) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/galery/' . $galery->id . '`, [`id`,`judul`, `foto`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/galery/' . $galery->id . '`, `galery-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addColumn('foto', function ($galery) {
                        return '<img src="/storage/galery/' . $galery->foto . '" width="150px" alt="">';
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi', 'foto'])
                    ->make(true);
            }

            return $this->successResponse($galeries, 'Data Galery ditemukan.');
        }

        return view('pages.backend.galery.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|unique:videos,judul',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $judul = $request->input('judul');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto')->hashName();
            $request->file('foto')->storeAs('public/galery', $file);
        }

        $galery = Galery::create([
            'judul' => $judul,
            'foto' => $file,
        ]);

        return $this->successResponse($galery, 'Data Galery ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $galery = Galery::find($id);

            if (!$galery) {
                return $this->errorResponse(null, 'Data Galery tidak ditemukan.', 404);
            }

            return $this->successResponse($galery, 'Data Galery ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|unique:videos,judul,' . $id,
            'foto' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $galery = Galery::find($id);

        if (!$galery) {
            return $this->errorResponse(null, 'Data Galery tidak ditemukan.', 404);
        }

        $judul = $request->input('judul');
        $file = $galery->foto;

        if ($request->hasFile('foto')) {
            Storage::delete('public/galery/' . $galery->foto);
            $file = $request->file('foto')->hashName();
            $request->file('foto')->storeAs('public/galery', $file);
        }

        $galery->update([
            'judul' => $judul,
            'foto' => $file,
        ]);

        return $this->successResponse($galery, 'Data Galery diperbarui.');
    }

    public function destroy($id)
    {
        $galery = Galery::find($id);

        if (!$galery) {
            return $this->errorResponse(null, 'Data Galery tidak ditemukan.', 404);
        }
        Storage::delete('public/galery/' . $galery->foto);
        $galery->delete();
        return $this->successResponse(null, 'Data Galery dihapus.');
    }
}