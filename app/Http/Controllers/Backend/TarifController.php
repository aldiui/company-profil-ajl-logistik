<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        return view('backend.tarif.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    public function destroy($id)
    {

    }
}
