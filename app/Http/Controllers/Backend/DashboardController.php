<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\DistributionCenter;
use App\Models\RetailPrice;
use App\Models\TruckingPrice;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.backend.dashboard.index', [
            'dc' => DistributionCenter::count(),
            'kota' => City::count(),
            'hargaRetail' => RetailPrice::count(),
            'hargaTrucking' => TruckingPrice::count(),
        ]);
    }
}
