<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cekout;
use PDF;

class LaporanController extends Controller
{
    //
    public function index(Request $request)
    {

        if ($request->input('datepicker')==null) {
            $tanggal = Date("Y-m-d",strtotime("now"));
        } else {
            $tanggal = "01-".$request->datepicker;

        }
        // dd($tanggal);
        $awal = date("Y-m-d", strtotime("first day of " . $tanggal));
        $akhir = date("Y-m-d", strtotime("last day of " . $tanggal));

        $lapor= cekout::all()
        ->where('created_at','>=',$awal)
        ->where('created_at','<=',$akhir);
        // ->get();
        return view('admin.laporan.lapor', compact('lapor'));
    }

    public function cetak($id)
    {
    	$laporan = cekout::all();
    	$pdf = PDF::loadview('admin.laporan.cetak',['laporan'=>$laporan]);
    	return $pdf->stream('laporan-cekout-pdf');
    }

    public function validasi_laporan(Request $request, $id)
    {
        //digunakan untuk mengubah status
        $bayar= cekout::findOrFail($id);
            $bayar->status_pesanan= "selesai";
            $bayar->update();

            return redirect('admin/laporan')->with('message', 'Validasi Laporan Berhasil');
    }
}
