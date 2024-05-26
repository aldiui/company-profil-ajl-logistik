<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class VideoController extends Controller
{
    use ApiResponder;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $videos = Video::all();
            if ($request->mode == "datatable") {
                return DataTables::of($videos)
                    ->addColumn('aksi', function ($video) {
                        $editButton = '<button class="btn btn-sm btn-warning me-1 d-inline-flex" onclick="getModal(`createModal`, `/admin/video/' . $video->id . '`, [`id`,`judul`, `link`])"><i class="bi bi-pencil-square me-1"></i>Edit</button>';
                        $deleteButton = '<button class="btn btn-sm btn-danger d-inline-flex" onclick="confirmDelete(`/admin/video/' . $video->id . '`, `video-table`)"><i class="bi bi-trash me-1"></i>Hapus</button>';
                        return $editButton . $deleteButton;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['aksi'])
                    ->make(true);
            }

            return $this->successResponse($videos, 'Data Video ditemukan.');
        }

        return view('pages.backend.video.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|unique:videos,judul',
            'link' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $video = Video::create($request->only(['judul', 'link']));
        return $this->successResponse($video, 'Data Video ditambahkan.');
    }

    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            $video = Video::find($id);

            if (!$video) {
                return $this->errorResponse(null, 'Data Video tidak ditemukan.', 404);
            }

            return $this->successResponse($video, 'Data Video ditemukan.');
        }

        abort(404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|unique:videos,judul,' . $id,
            'link' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
        }

        $video = Video::find($id);

        if (!$video) {
            return $this->errorResponse(null, 'Data Video tidak ditemukan.', 404);
        }

        $video->update($request->only(['judul', 'link']));
        return $this->successResponse($video, 'Data Video diperbarui.');
    }

    public function destroy($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return $this->errorResponse(null, 'Data Video tidak ditemukan.', 404);
        }

        $video->delete();
        return $this->successResponse(null, 'Data Video dihapus.');
    }
}
