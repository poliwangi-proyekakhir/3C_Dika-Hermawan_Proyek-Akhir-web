<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cekout;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function laporan(Request $request)
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
        return view('laporanpimpinan', compact('lapor'));
    }

    public function cetak($id)
    {
    	$laporan = cekout::all();
    	$pdf = PDF::loadview('cetaklaporan',['laporanpimpinan'=>$laporan]);
    	return $pdf->stream('laporanpimpinan-cekout-pdf');
    }
}
