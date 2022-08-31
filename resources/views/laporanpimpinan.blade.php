@extends('layouts.app')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="margin-top: -25px; margin-left: 0px; height: 109%; background-color: #53B175;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <!-- <div class="sb-sidenav-menu-heading" style="color: #fff;">Data Transaksi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Transaksi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Data Pesanan</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Data Tawaran</a>
                                </nav>
                            </div> -->

                            <div class="sb-sidenav-menu-heading"  style="color: #fff;">Laporan</div>
                            <a class="nav-link" href="{{ url('laporanpimpinan') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Laporan Transaksi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background-color: #53B175;">
                        <div class="small">Logged in as:</div>
                        Pimpinan Rojotani
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" style="margin-top: -25px;">
                <main>
                    <div class="container-fluid px-2">
                        <div class="card mt-4">
                            <div class="card-header2">
                                <h4>Laporan Transaksi
                                </h4>
                            </div>
                            <div class="card-body">
                            
                                    <form action="{{ route('laporanpimpinan') }}" method="get" >
                                    
                                        <input type="text" class="form-control" name="datepicker2" id="datepicker2" placeholder="Pilih Tanggal"
                                        style="width: 25%; margin-left: 0px; margin-top: 30px;  "/>

                                        <button type="submit" style="height: 35px; width: 80px; background-color: #53B175; 
                                        border-color: #53B175; border-radius: 8px; font-size: 17px; font-weight: 400;
                                        color: white; margin-top: 20px;">Cari</button>
                                               
                                    </form>

                                @if (session('message'))
                                    <div class="alert alert-success">{{ (session('message')) }}</div>
                                @endif

                                <table class="table table-bordered" style="margin-top: 20px;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Bayar</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach ($lapor as $item)

                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $item->nama_pembeli }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            
                                            <?php
                                            $produk=$item->produk->nama;
                                            ?>
                                            @if($produk==!null)
                                                <td>{{ $item->produk->nama }}</td>
                                                <td>{{ $item->produk->jenis }}</td>
                                            @else
                                                <td>{{ $item->nama_produk_lengang }}</td>
                                                <td>{{ $item->jenis}}</td>
                                            @endif
                                                <td>{{ $item->total_bayar }}</td>
                                                <td>{{ $item->status_pesanan }}</td>

                                                <td> 
                                                    <a href="{{ url('cetaklaporan/'.$item->id)}}" class="btn btn-danger" target="_blank">Cetak</a>
                                                </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>

@endsection
