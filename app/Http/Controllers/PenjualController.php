<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\user_penjual;
use Validator;

class PenjualController extends Controller
{
    public function index()
    {
        $user_penjuals = user_penjual::all();
        return view('admin.datapenjual.index', compact('user_penjuals'));
    }

    public function edit_userpenjual($penjual_id){
        $userpenjual = user_penjual::find($penjual_id);
        return view('admin.datapenjual.edit', compact('userpenjual'));
    }

    public function update_userpenjual(Request $request, $penjual_id)
    {
        $userpenjual = user_penjual::find($penjual_id);
        $userpenjual->nama = $request->nama;
        $userpenjual->alamat = $request->alamat;
        $userpenjual->no_rekening = $request->no_rekening;
        $userpenjual->email = $request->email;


        if ($request->hasfile('gambar')) {

            $destination = 'public/public/img/userpenjual/' . $userpenjual->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move('public/public/img/userpenjual/', $filename);
            $userpenjual->gambar = $filename;
        }


        // if ($request->hasfile('gambar')) {

        //     $destination = 'public/img/userpenjual/' . $userpenjual->gambar;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }

        //     $image = $request->file('gambar')->getClientOriginalName();
        //     $imgpath= $request->file('gambar')->move('public/img/userpenjual', $image);
        // }

        $userpenjual->update();
        return redirect('admin/datapenjual')->with('message', 'Data Berhasil Diubah');

    }

    public function delete_userpenjual($penjual_id)
    {
        $userpenjual = user_penjual::find($penjual_id);
        if ($userpenjual) {
            $destination = 'public/public/img/userpenjual/' . $userpenjual->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $userpenjual->delete();
            return redirect('admin/datapenjual')->with('message', 'Data Berhasil Dihapus');
        } else {
            return redirect('admin/datapenjual')->with('message', 'Data Id Tidak Ditemukan');
        }
    }

     public function detailpenjual($penjual_id)
    {
        $penjual = user_penjual::find($penjual_id);
        return view('admin.datapenjual.detail', compact('penjual'));
    }
}
