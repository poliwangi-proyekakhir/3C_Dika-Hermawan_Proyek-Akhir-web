<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lelang;
use Validator;
use Illuminate\Support\Facades\File;

class ProdukLelangController extends Controller
{
    //
    public function index()
    {
        $lelangs = Lelang::all();
        return view('admin.datalelang.produklelang', compact('lelangs'));
    }

    public function detailLelang($lelang_id)
    {
        $lelang= Lelang::find($lelang_id);
        return view('admin.datalelang.detailLelang', compact('lelang'));
    }

    public function delete_lelang($lelang_id)
    {
        $lelang = lelang::find($lelang_id);
        if ($lelang) {
            $destination = 'public/imglelang/lelang/' . $lelang->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $lelang->delete();
            return redirect('admin/datalelang')->with('message', 'Produk Berhasil Dihapus');
        } else {
            return redirect('admin/datalelang')->with('message', 'Produk dengan Id tersebut Tidak Ditemukan');
        }
    }
}
