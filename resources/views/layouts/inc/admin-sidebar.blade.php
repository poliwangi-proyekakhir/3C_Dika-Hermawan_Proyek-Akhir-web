<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    User Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Data Pegawai
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('admin/add-userdata') }}">Tambah Data</a>
                                <a class="nav-link" href="{{ url('admin/userdata') }}">Lihat Data</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="{{ url('admin/datapenjual') }}">
                        Data Pemilik Komoditas
                        </a>

                        <a class="nav-link collapsed" href="{{ url('admin/datapembeli') }}">
                        Data Pelanggan
                        </a>


                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                    <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                    Data Produk
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/produk') }}">Data Produk</a>
                        <a class="nav-link" href="{{ url('admin/produklelang') }}">Data Produk Lelang</a>
                    </nav>
                </div>

                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Transaksi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/pesanan') }}">Data Pesanan</a>
                        <a class="nav-link" href="{{ url('admin/tawar') }}">Data Tawaran</a>
                        <a class="nav-link" href="{{ url('admin/pembayaran') }}">Pembayaran</a>
                    </nav>
                </div>

                <a class="nav-link" href="{{ url('admin/laporan') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Laporan Transaksi
                </a>

                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin RojoTani
        </div>
    </nav>
</div>
