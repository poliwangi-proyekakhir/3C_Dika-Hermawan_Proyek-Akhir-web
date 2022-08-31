<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user_pembeli;
use App\Models\Userdata;
use App\Models\User;
use App\Models\user_penjual;
use App\Models\Produk;
use App\Models\Lelang;
use App\Models\cekout;



class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Userdata::count();
        $admin = User::where('role_as','1')->count();
        $penjual = user_penjual::count();
        $pembeli = user_pembeli::count();
        $produk = Produk::count();
        $lelang = Lelang::count();
        $cekout = cekout::count();

        return view('admin.dashboard', compact('pegawai','admin','penjual','pembeli','produk','lelang','cekout'));
    }
}
