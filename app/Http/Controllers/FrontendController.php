<?php

namespace App\Http\Controllers;

use App\Models\DistributionCenter;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
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

    public function cekTarif()
    {
        return view('pages.frontend.cek-tarif');
    }

    public function cabang()
    {
        $distributionCenters = DistributionCenter::all();
        return view('pages.frontend.cabang', compact('distributionCenters'));
    }
}