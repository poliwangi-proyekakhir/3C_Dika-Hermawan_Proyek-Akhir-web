<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/laporanpimpinan', [App\Http\Controllers\HomeController::class, 'laporan'])->name('laporanpimpinan');

Route::get('cetaklaporan/{id}', [App\Http\Controllers\LaporanController::class, 'cetak']);




Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    //Data Pegawai (userdata Web)

    Route::get('userdata', [App\Http\Controllers\UserdataController::class, 'index']);

    Route::get('add-userdata', [App\Http\Controllers\UserdataController::class, 'create']);

    Route::post('add-userdata', [App\Http\Controllers\UserdataController::class, 'store']);

    Route::get('edit-userdata/{userdata_id}', [App\Http\Controllers\UserdataController::class, 'edit']);

    Route::put('update-userdata/{userdata_id}', [App\Http\Controllers\UserdataController::class, 'update']);

    Route::get('delete-userdata/{userdata_id}', [App\Http\Controllers\UserdataController::class, 'destroy']);


    //Data Pelanggan RojoTani

    Route::get('datapembeli', [App\Http\Controllers\PembeliController::class, 'index']);

    Route::get('edit-datapembeli/{pembeli_id}', [App\Http\Controllers\PembeliController::class, 'edit_userpembeli']);

    Route::put('update-datapembeli/{pembeli_id}', [App\Http\Controllers\PembeliController::class, 'update_userpembeli']);

    Route::get('delete-datapembeli/{pembeli_id}', [App\Http\Controllers\PembeliController::class, 'delete_userpembeli']);
    
    Route::get('detailpembeli/{pembeli_id}', [App\Http\Controllers\PembeliController::class, 'detailpembeli']); 

    Route::get('selesaidetail', [App\Http\Controllers\PembeliController::class, 'index']); 


    //Data Pemilik Komoditas penjual)
    Route::get('datapenjual', [App\Http\Controllers\PenjualController::class, 'index']);

    Route::get('edit-datapenjual/{penjual_id}', [App\Http\Controllers\PenjualController::class, 'edit_userpenjual']);

    Route::put('update-datapenjual/{penjual_id}', [App\Http\Controllers\PenjualController::class, 'update_userpenjual']);

    Route::get('delete-datapenjual/{penjual_id}', [App\Http\Controllers\PenjualController::class, 'delete_userpenjual']);

    Route::get('detailpenjual/{penjual_id}', [App\Http\Controllers\PenjualController::class, 'detailpenjual']); 

    Route::get('keluardetail', [App\Http\Controllers\PenjualController::class, 'index']); 


    //Data Produk
    Route::get('produk', [App\Http\Controllers\ProdukController::class, 'index']);

    Route::get('dataproduk', [App\Http\Controllers\ProdukController::class, 'index']); // untuk tombol refresh

    Route::get('detailproduk/{produk_id}', [App\Http\Controllers\ProdukController::class, 'detailproduk']); 

    Route::get('selesai', [App\Http\Controllers\ProdukController::class, 'index']); // digunakan untuk tombol kembali dihalaman detail

    Route::get('delete-produk/{produk_id}', [App\Http\Controllers\ProdukController::class, 'delete_produk']);


    //Data Lelang
    Route::get('produklelang', [App\Http\Controllers\ProdukLelangController::class, 'index']);

    Route::get('datalelang', [App\Http\Controllers\ProdukLelangController::class, 'index']); //untuk button refresh

    Route::get('detailLelang/{lelang_id}', [App\Http\Controllers\ProdukLelangController::class, 'detailLelang']); 

    Route::get('keluar', [App\Http\Controllers\ProdukLelangController::class, 'index']); // digunakan untuk tombol kembali dihalaman detail

    Route::get('delete-lelang/{lelang_id}', [App\Http\Controllers\ProdukLelangController::class, 'delete_lelang']);


    //Data Pesanan atau Cekout
    Route::get('pesanan', [App\Http\Controllers\PesananController::class, 'index']); // untuk tombol refresh

    Route::get('datapesanan', [App\Http\Controllers\PesananController::class, 'index']); 

    Route::get('detail/{cekout_id}', [App\Http\Controllers\PesananController::class, 'detail']); 

    Route::get('kembali', [App\Http\Controllers\PesananController::class, 'index']); 

    Route::get('edit-pesanan/{cekout_id}', [App\Http\Controllers\PesananController::class, 'edit_cekout']);

    Route::put('update-pesanan/{cekout_id}', [App\Http\Controllers\PesananController::class, 'update_cekout']);

    Route::get('cetakpesanan', [App\Http\Controllers\PesananController::class, 'cetakpesanan']);



    //Data Pembayaran
    Route::get('pembayaran', [App\Http\Controllers\PembayaranController::class, 'index']);

    Route::get('bayar', [App\Http\Controllers\PembayaranController::class, 'index']); // digunakan untuk tombol refresh 

    Route::get('edit-bayar/{bayar_id}', [App\Http\Controllers\PembayaranController::class, 'edit_bayar']);

    Route::get('detailbayar/{bayar_id}', [App\Http\Controllers\PembayaranController::class, 'detail']); 

    Route::get('kembalilagi', [App\Http\Controllers\PembayaranController::class, 'index']); //untuk tombol kembali

    //Route::put('update-bayar/{bayar_id}', [App\Http\Controllers\PembayaranController::class, 'update_bayar']);



    //Data Tawar
    Route::get('tawar', [App\Http\Controllers\TawaranController::class, 'index']);

    Route::get('tawaran', [App\Http\Controllers\TawaranController::class, 'index']); //digunakan untuk tombol refresh

    Route::get('detailtawar/{tawar_id}', [App\Http\Controllers\TawaranController::class, 'detail']); 

    Route::get('balik', [App\Http\Controllers\TawaranController::class, 'index']); //digunakan untuk tombol kembali



    //alamat route laporan
    //cetak pdf
    Route::get('cetak/{id}', [App\Http\Controllers\LaporanController::class, 'cetak']);

    Route::get('laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');

    Route::get('validasi-lapor/{laporan_id}', [App\Http\Controllers\LaporanController::class, 'validasi_laporan']);


});

