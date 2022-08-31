<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cekout;
use App\Models\Produk;
use App\Models\Pembayaran;
use PDF;


class PesananController extends Controller
{

    public function index()
    {
        $cekout = cekout::all();
        return view('admin.pesanan.pesan', compact('cekout'));
    }

    public function detail(Request $request)
    {
        $cekouts = cekout::find($request->cekout_id);
        return view('admin.pesanan.detail', compact('cekouts'));
    }

    public function edit_cekout(Request $request){
        $cekout = cekout::find($request->cekout_id);
        return view('admin.pesanan.edit', compact('cekout'));
    }

    public function update_cekout(Request $request)
    {
        $cekout = cekout::find($request->cekout_id);
        $cekout->status_pesanan = $request->status_pesanan;

        $cekout->update();
        return redirect('admin/pesanan')->with('message', 'Data Berhasil Diubah');

    }

    public function cetakpesanan()
    {
    	$pesanan = cekout::all();
    	$pdf = PDF::loadview('admin.pesanan.cetak',['pesanan'=>$pesanan]);
    	return $pdf->stream('pesanan-data-pdf');
    }
}
