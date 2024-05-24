<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Tarif;

class DashboardController extends Controller
{
    public function index()
    {
        $store = Store::count();
        $tarif = Tarif::count();
        return view('pages.backend.dashboard.index', compact('store', 'tarif'));
    }
}
