@extends('layouts.master')

@section('title','RojoTani Dashboard')

@section('content')
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card text-white mb-4" style="background-color: #53B175;">
                    <div class="card-body">
                        Total Pegawai (Admin)
                        <h2>{{ $pegawai + $admin }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/userdata')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ">
                <div class="card1 bg-warning text-white mb-4" style=border>
                    <div class="card-body">
                        Total User Penjual
                        <h2>{{ $penjual }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/datapenjual')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">
                        Total User Pembeli
                        <h2> {{ $pembeli }} </h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/datapembeli')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        Total Produk
                        <h2>{{ $produk }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/produk')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        Total Produk Lelang
                        <h2>{{ $lelang }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/produklelang')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        Total Pesanan
                        <h2>{{ $cekout }}</h2>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('admin/pesanan')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
