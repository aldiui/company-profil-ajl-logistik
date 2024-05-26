<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Corporate;
use App\Models\DistributionCenter;
use App\Models\Galery;
use App\Models\RetailPrice;
use App\Models\TruckingPrice;
use App\Models\Video;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    use ApiResponder;

    public function index()
    {
        return view('pages.frontend.home');
    }

    public function tentang()
    {
        return view('pages.frontend.tentang');
    }

    public function layanan()
    {
        return view('pages.frontend.layanan');
    }

    public function cekTarif(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'kategori' => 'required|in:Retail,Trucking',
                'kota_asal' => 'required',
                'kota_tujuan' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->errorResponse($validator->errors(), 'Data tidak valid.', 422);
            }

            $kategori = $request->kategori;
            if ($kategori == "Retail") {
                $tarif = RetailPrice::with('distributionCenter', 'city')->whereDistributionCenterId($request->kota_asal)->whereCityId($request->kota_tujuan)->first();
                $html = view('pages.frontend.table-tarif', compact('tarif', 'kategori'))->render();
                return $this->successResponse($html, 'Data ditemukan.');
            } else {
                $tarif = TruckingPrice::find($request->kota_tujuan);
                $html = view('pages.frontend.table-tarif', compact('tarif', 'kategori'))->render();
                return $this->successResponse($html, 'Data ditemukan.');

            }
        }
        return view('pages.frontend.cek-tarif');
    }

    public function cabang()
    {
        $distributionCenters = DistributionCenter::all();
        return view('pages.frontend.cabang', compact('distributionCenters'));
    }

    public function galery(Request $request)
    {
        $galeries = Galery::paginate(12);

        if ($request->ajax()) {
            return view('pages.frontend.galery-pagination', compact('galeries'))->render();
        }

        return view('pages.frontend.galery', compact('galeries'));
    }

    public function video(Request $request)
    {
        $videos = Video::paginate(10);

        if ($request->ajax()) {
            return view('pages.frontend.video-pagination', compact('videos'))->render();
        }

        return view('pages.frontend.video', compact('videos'));
    }

    public function faq()
    {
        return view('pages.frontend.faq');
    }

    public function kotaAsal(Request $request, $kategori)
    {
        if ($request->ajax()) {
            if ($kategori == "Retail") {
                $kotaAsal = DistributionCenter::select('id', 'nama')->get();
                return $this->successResponse($kotaAsal, 'Data Distribution Center ditemukan.');
            } else {
                $kotaAsal = [
                    [
                        "id" => "trucking",
                        "nama" => "trucking",
                    ],
                ];
                return $this->successResponse($kotaAsal, 'Data Kota Asal ditemukan.');
            }
        }

        abort(404);
    }

    public function kotaTujuan(Request $request, $kategori)
    {
        if ($request->ajax()) {
            if ($kategori == "Retail") {
                $kotaTujuan = City::select('id', 'nama')->get();
                return $this->successResponse($kotaTujuan, 'Data Kota Tujuan ditemukan.');
            } else {
                $kotaTujuan = TruckingPrice::select('id', 'rute as nama')->get();
                return $this->successResponse($kotaTujuan, 'Data Kota Tujuan ditemukan.');
            }
        }

        abort(404);
    }

    public function orderCorporate(Request $request)
    {
        if ($request->isMethod('post')) {
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

            $corporate = Corporate::create($request->only(['nama_perusahaan', 'nama_pic', 'email', 'no_handphone', 'alamat_kantor']));

            $message = "Nama Perusahaan: " . $corporate->nama_perusahaan . " \n" .
            "Nama PIC: " . $corporate->nama_pic . " \n" .
            "Email: " . $corporate->email . " \n" .
            "No Handphone: " . $corporate->no_handphone . " \n" .
            "Alamat Kantor: " . $corporate->alamat_kantor;

            $encodedMessage = urlencode($message);
            $link = "https://api.whatsapp.com/send?phone=6282281018776&text=$encodedMessage";
            return $this->successResponse(compact('link'), 'Order corporate berhasil');
        }

        return view('pages.frontend.order-corporate');
    }
}
