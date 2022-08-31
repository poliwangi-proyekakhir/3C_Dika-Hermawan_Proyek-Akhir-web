<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use Validator;
use Illuminate\Support\Facades\File;


class ProdukController extends Controller
{
    //
    public function index()
    {
        $produks = Produk::all();
        return view('admin.dataproduk.produk', compact('produks'));
    }

    public function detailproduk($produk_id)
    {
        $produk= Produk::find($produk_id);
        return view('admin.dataproduk.detailproduk', compact('produk'));
    }

    public function delete_produk($produk_id)
    {
        $produk = Produk::find($produk_id);
        if ($produk) {
            $destination = 'public/img/produk/' . $produk->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $produk->delete();
            return redirect('admin/dataproduk')->with('message', 'Data Berhasil Dihapus');
        } else {
            return redirect('admin/dataproduk')->with('message', 'Data dengan Id tersebut Tidak Ditemukan');
        }
    }

}
