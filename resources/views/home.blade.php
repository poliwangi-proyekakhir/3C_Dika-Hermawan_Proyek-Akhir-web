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
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Selamat Datang Pimpinan RojoTani</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">RojoTani Web</li>
                        </ol>
                    </div>
                    
                </main>
            </div>
        </div>

@endsection
