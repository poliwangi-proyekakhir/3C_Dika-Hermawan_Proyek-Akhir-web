<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\PenjualController;
use App\Http\Controllers\Api\PelangganController;
use App\Http\Controllers\Api\LelangController;
use App\Http\Controllers\Api\TambahStokController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\Auth\UserMobileController;
use App\Http\Controllers\Api\Auth\UserPenjualController;
use App\Http\Controllers\Api\Auth\UserPembeliController;
use App\Http\Controllers\Api\CekoutController;
use App\Http\Controllers\Api\PembayaranController;
use App\Http\Controllers\Api\TawarController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:passport')->get('/user', function (Request $request) {
    return $request->user();
});

//Api Login Register Update Password Penjual
Route::post('regpenjual', [UserPenjualController::class, 'register_penjual']);
Route::post('logpenjual', [UserPenjualController::class, 'login_penjual']);
// Route::get('datapenjual/{id}', [UserPenjualController::class, 'get_penjual']);
Route::post('datapenjual', [UserPenjualController::class, 'get_penjual']);
Route::post('updatepenjual', [UserPenjualController::class, 'updatePassword']);
Route::post('editProfilPjl', [UserPenjualController::class, 'edit_profil']);
Route::post('profilPenjual', [UserPenjualController::class, 'updateProfil']);


//Api Login Register Update Password Pembeli
Route::post('regpembeli', [UserPembeliController::class, 'register_pembeli']);
Route::post('logpembeli', [UserPembeliController::class, 'login_pembeli']);
Route::post('updatepembeli', [UserPembeliController::class, 'updatePassword1']);
Route::post('getpembeli', [UserPembeliController::class, 'get_pembeli']);
Route::post('datapembeli', [UserPembeliController::class, 'get_pembeli']); //untuk ambil data
Route::post('profilPembeli', [UserPembeliController::class, 'updateProfil1']);


//Api Produk
Route::post('produk', [ProdukController::class, 'tambah_produk']);
Route::get('getprodukall', [ProdukController::class, 'tampil_semua']);
Route::post('getproduk', [ProdukController::class, 'tampil_produk']);
Route::post('produk/edit', [ProdukController::class, 'edit_produk']);
Route::post('produk/update', [ProdukController::class, 'update_produk']);
Route::delete('deleteProduk/{produk_id}', [ProdukController::class, 'deleteProduk']);


//Api Produk Lelang
Route::post('lelang', [LelangController::class, 'tambah_lelang']);
Route::get('getlelangall', [LelangController::class, 'tampil_semua']);
Route::post('getlelang', [LelangController::class, 'tampil_lelang']);
Route::post('lelang/edit', [LelangController::class, 'edit_lelang']);
Route::post('lelang/update', [LelangController::class, 'update_lelang']);
Route::delete('deleteLelang/{lelang_id}', [LelangController::class, 'deletelelang']);


Route::post('lelang/ambildata', [LelangController::class, 'data']); //digunaka untuk ambil data
Route::post('ambildatatawar', [LelangController::class, 'getdata']); //digunaka untuk ambil data
Route::post('editstatus', [LelangController::class, 'edit_status']);
Route::post('status/update', [LelangController::class, 'update_status']);



//Api untuk cekout
Route::post('cekout', [CekoutController::class, 'tambah_cekout']);
Route::post('cekout/ambilproduk', [CekoutController::class, 'cekout']);

Route::post('status/belum', [CekoutController::class, 'getbelum']);
Route::post('status/kemas', [CekoutController::class, 'getkemas']);
Route::post('status/kirim', [CekoutController::class, 'getkirim']);
Route::post('status/terima', [CekoutController::class, 'getterima']);
Route::post('status/selesai', [CekoutController::class, 'getselesai']);
Route::post('cekout/status', [CekoutController::class, 'status_pesanan']);


Route::post('cekoutTawar', [CekoutController::class, 'cekout_tawar']); // tidak jadi dipakai


Route::post('kemas', [CekoutController::class, 'kemas']); //untuk petani
Route::post('kirim', [CekoutController::class, 'kirim']); //untuk petani
Route::post('terima', [CekoutController::class, 'terima']); //untuk petani
Route::post('selesai', [CekoutController::class, 'selesai']); //untuk petani


Route::post('detaildata', [CekoutController::class, 'produkdetail']); //detail produkkkkk 



//Api untuk bayar
Route::post('bayar', [PembayaranController::class, 'tambah_bayar']);
Route::post('bayar/ambildata', [PembayaranController::class, 'databayar']);


//Api untuk tawar
Route::post('tawar', [TawarController::class, 'tambah_tawar']);
Route::post('tawar/ambildata', [TawarController::class, 'tawar']);
Route::delete('deleteTawar/{tawar_id}', [TawarController::class, 'deletetawar']);
Route::post('datatawarid', [TawarController::class, 'tampil_tawar']);




//belum selesaii :)
Route::post('tambah_stok', [TambahStokController::class, 'tambah_stok']);
Route::delete('hapus_stok/{hps_stok}', [TambahStokController::class, 'hapus_stok']);


