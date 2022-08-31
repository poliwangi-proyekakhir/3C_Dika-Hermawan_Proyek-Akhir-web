@extends('layouts.master')

@section('title','Detail Pesanan RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 95%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Pesanan
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/img/produk/'. $cekouts->gambar) }}"
                        alt="Img"
                        height="76%"
                        width="92%"
                        style="margin-top: 38px; margin-left: 20px;"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body table-responsive">
                        <table class="table table-stripped">
                            <tr>
                                <th width="45%">Nama Pembeli</th>
                                <td>:</td>
                                <td>{{ $cekouts->nama_pembeli }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Pembeli</th>
                                <td>:</td>
                                <td>{{ $cekouts->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Nama Produk</th>
                                <td width="2%">:</td>
                                <td>{{ $cekouts->produk->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Produk yang Dibeli</th>
                                <td>:</td>
                                <td>{{ $cekouts->jumlah }}</td>
                            </tr>
                            <tr>
                                <th>Harga Produk</th>
                                <td>:</td>
                                <td>Rp. {{ $cekouts->harga}}</td>
                            </tr>
                            <tr>
                                <th>Subtotal</th>
                                <td>:</td>
                                <td>Rp. {{ $cekouts->subtotal }}</td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <td>:</td>
                                <td>Rp. {{ $cekouts->total_bayar }}</td>
                            </tr>
                            <tr>
                                <th>Catatan Pesanan</th>
                                <td>:</td>
                                <td>{{ $cekouts->catatan }}</td>
                            </tr>
                            <tr>
                                <th>Status Pesanan</th>
                                <td>:</td>
                                <td>{{ $cekouts->status_pesanan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/kembali') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
