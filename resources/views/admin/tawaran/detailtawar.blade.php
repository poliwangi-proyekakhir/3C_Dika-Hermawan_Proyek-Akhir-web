@extends('layouts.master')

@section('title','Detail Tawaran RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 95%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Tawaran
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/imglelang/lelang/'. $tawars->lelang->gambar) }}"
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
                                <th width="45%">ID Pembeli</th>
                                <td>:</td>
                                <td>{{ $tawars->pembeli->id }}</td>
                            </tr>    
                        <tr>
                                <th width="45%">Nama Pembeli</th>
                                <td>:</td>
                                <td>{{ $tawars->pembeli->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Pembeli</th>
                                <td>:</td>
                                <td>{{ $tawars->pembeli->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="45%">ID Produk Lelang</th>
                                <td>:</td>
                                <td>{{ $tawars->lelang->id }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Nama Produk</th>
                                <td width="2%">:</td>
                                <td>{{ $tawars->lelang->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Produk yang Dibeli</th>
                                <td>:</td>
                                <td>{{ $tawars->lelang->jumlah }}</td>
                            </tr>
                            <tr>
                                <th>Harga Tawaran</th>
                                <td>:</td>
                                <td>Rp. {{ $tawars->harga_tawar}}</td>
                            </tr>
                            <tr>
                                <th>Status Tawaran</th>
                                <td>:</td>
                                <td>{{ $tawars->status_tawar }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/balik') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
