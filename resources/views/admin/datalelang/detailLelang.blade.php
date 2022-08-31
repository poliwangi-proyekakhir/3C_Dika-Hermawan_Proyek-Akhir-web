@extends('layouts.master')

@section('title','Detail Produk Lelang RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 95%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Produk Lelang
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/imglelang/lelang/'.$lelang->gambar) }}"
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
                                <th width="45%">ID Penjual</th>
                                <td>:</td>
                                <td>{{ $lelang->penjual->id }}</td>
                            </tr>
                            <tr>
                                <th width="45%">Nama Penjual</th>
                                <td>:</td>
                                <td>{{ $lelang->penjual->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Penjual</th>
                                <td>:</td>
                                <td>{{ $lelang->penjual->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Nama Produk Lelang</th>
                                <td width="2%">:</td>
                                <td>{{ $lelang->nama }}</td>
                            </tr>
                            <tr>
                                <th>Harga Produk lelang</th>
                                <td>:</td>
                                <td>Rp. {{ $lelang->harga}}</td>
                            </tr>
                            <tr>
                                <th>Satuan</th>
                                <td>:</td>
                                <td>{{ $lelang->satuan }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Produk</th>
                                <td>:</td>
                                <td>{{ $lelang->jenis }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>:</td>
                                <td>{{ $lelang->deskripsi }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/keluar') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
