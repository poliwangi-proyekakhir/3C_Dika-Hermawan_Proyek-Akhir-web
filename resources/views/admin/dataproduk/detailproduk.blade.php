@extends('layouts.master')

@section('title','Detail Produk RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 95%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Produk
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/img/produk/'.$produk->gambar) }}"
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
                                <th width="45%">Nama Penjual</th>
                                <td>:</td>
                                <td>{{ $produk->penjual->nama }}</td>
                            </tr>
                            <tr>
                                <th width="45%">ID Penjual</th>
                                <td>:</td>
                                <td>{{ $produk->penjual->id }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Penjual</th>
                                <td>:</td>
                                <td>{{ $produk->penjual->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Nama Produk</th>
                                <td width="2%">:</td>
                                <td>{{ $produk->nama }}</td>
                            </tr>
                            <tr>
                                <th>Harga Produk</th>
                                <td>:</td>
                                <td>Rp. {{ $produk->harga}}</td>
                            </tr>
                            <tr>
                                <th>Satuan</th>
                                <td>:</td>
                                <td>{{ $produk->satuan }}</td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>:</td>
                                <td>{{ $produk->stok }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Produk</th>
                                <td>:</td>
                                <td>{{ $produk->jenis }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>:</td>
                                <td>{{ $produk->deskripsi }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/selesai') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
