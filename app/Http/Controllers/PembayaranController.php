<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cekout;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $bayars = Pembayaran::all();
        return view('admin.pembayaran.bayar', compact('bayars'));
    }

    public function edit_bayar(Request $request, $id)
    {
        //digunakan untuk mengubah status
        $bayar= Pembayaran::findOrFail($id);
            $bayar->status_bayar= "Valid";
            $bayar->update();

            return redirect('admin/pembayaran')->with('message', 'Validasi Pembayaran Berhasil');
    }

    public function detail(Request $request)
    {
        $bayars = Pembayaran::find($request->bayar_id);
        return view('admin.pembayaran.detailbayar', compact('bayars'));
    }


    // public function update_bayar(Request $request)
    // {

    //     $bayar = Pembayaran::find($request->bayar_id);
    //     $bayar->status_bayar = $request->status_bayar;

    //     $bayar->update();

    //     // $bayar = Pembayaran::where('id', $request->bayar_id)
    //     // ->update([
    //     //     'status_bayar' => $request->status_bayar
    //     // ]);
    //     return redirect('admin/pembayaran')->with('message', 'Status Berhasil Diubah');

    // }   
}
