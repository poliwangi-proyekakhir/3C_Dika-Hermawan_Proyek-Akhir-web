@extends('layouts.master')

@section('title','Laporan Transaksi Penjualan')

@section('content')

<div class="container-fluid px-2">
    <div class="card mt-4">
        <div class="card-header2">
            <h4>Laporan Transaksi
            </h4>
        </div>
        <div class="card-body">
        
                <form action="{{ route('laporan') }}" method="get" >
                
                    

                    <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pilih Tanggal"
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


                            <?php 
                            $status = $item->status_pesanan;
                            ?>


                        @if ($status=="diterima") 

                            <td>
                                <a class="btn btn-success" href="{{ url('admin/validasi-lapor/'.$item->id)}}">Validasi</a>
                            </td>
                            
                        @else 
                            <td> 
                                <a href="{{ url('admin/cetak/'. $item->id)}}" class="btn btn-danger" target="_blank">Cetak</a>
                            </td>
                        @endif

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
