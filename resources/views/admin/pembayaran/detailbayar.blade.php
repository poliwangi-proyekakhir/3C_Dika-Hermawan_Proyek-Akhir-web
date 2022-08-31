@extends('layouts.master')

@section('title','Detail Pembayaran RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 95%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Pembayaran
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/img/buktibayar/'. $bayars->gambar) }}"
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
                                <th width="45%">ID Pesanan</th>
                                <td>:</td>
                                <td>{{ $bayars->cekout_id }}</td>
                            </tr>
                            <tr>
                                <th width="45%">ID Pembeli</th>
                                <td>:</td>
                                <td>{{ $bayars->pembeli_id }}</td>
                            </tr>
                            <tr>
                                <th width="45%">Nama Pembeli</th>
                                <td>:</td>
                                <td>{{ $bayars->nama_pembeli }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Pembeli</th>
                                <td>:</td>
                                <td>{{ $bayars->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Nomor Rekening</th>
                                <td width="2%">:</td>
                                <td>{{ $bayars->no_rekening }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Produk yang Dibeli</th>
                                <td>:</td>
                                <td>{{ $bayars->jumlah }}</td>
                            </tr>
                            <tr>
                                <th>Harga Produk</th>
                                <td>:</td>
                                <td>Rp. {{ $bayars->harga}}</td>
                            </tr>
                            <tr>
                                <th>Subtotal</th>
                                <td>:</td>
                                <td>Rp. {{ $bayars->subtotal }}</td>
                            </tr>
                            <tr>
                                <th>Ongkir</th>
                                <td>:</td>
                                <td>Rp. {{ $bayars->ongkir }}</td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <td>:</td>
                                <td>Rp. {{ $bayars->total_bayar }}</td>
                            </tr>
                            <tr>
                                <th>Status Pesanan</th>
                                <td>:</td>
                                <td>{{ $bayars->status_bayar }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/kembalilagi') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
