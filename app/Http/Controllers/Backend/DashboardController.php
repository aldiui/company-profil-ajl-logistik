<?php

namespace App\Http\Controllers\Backend;

use App\Models\City;
use App\Models\Video;
use App\Models\Galery;
use App\Models\Corporate;
use App\Models\RetailPrice;
use App\Models\TruckingPrice;
use App\Models\DistributionCenter;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.backend.dashboard.index', [
            'dc' => DistributionCenter::count(),
            'kota' => City::count(),
            'hargaRetail' => RetailPrice::count(),
            'hargaTrucking' => TruckingPrice::count(),
            'galery' => Galery::count(),
            'video' => Video::count(),
            'orderCorporate' => Corporate::count(),
        ]);
    }
}