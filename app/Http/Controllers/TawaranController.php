<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tawar;


class TawaranController extends Controller
{
    public function index()
    {
        $tawar = Tawar::all();
        return view('admin.tawaran.tawar', compact('tawar'));
    }

    public function detail(Request $request)
    {
        $tawars = Tawar::find($request->tawar_id);
        return view('admin.tawaran.detailtawar', compact('tawars'));
    }
}
