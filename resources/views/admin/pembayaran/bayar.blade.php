@extends('layouts.master')

@section('title','Data Bayar RojoTani')

@section('content')

<div class="container-fluid px-2">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Pembayaran Pesanan
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a class="btn buttonrefresh1" href="{{ url('admin/bayar') }}">Refresh Data</a>
            </div>

            @if (session('message'))
                <div class="alert alert-success">{{ (session('message')) }}</div>
            @endif

            <table id="tabelData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>CekoutID</th>
                        <th>No.Rek</th>
                        <th>Alamat</th>
                        <th>Ongkir</th>
                        <th>Subtotal</th>
                        <th>Total</th>
                        <th>Bukti</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($bayars as $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->nama_pembeli }}</td>
                        <td>{{ $item->cekout->id }}</td>
                        <td>{{ $item->no_rekening }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->ongkir }}</td>
                        <td>{{ $item->subtotal }}</td>
                        <td>{{ $item->total_bayar }}</td>
                        <td>
                            <img src="{{ asset('public/img/buktibayar/'.$item->gambar) }}" width="60px" height="50px" alt="Img">    
                        </td>
                        <td>{{ $item->status_bayar}}</td>

                        <?php 
                        $status = $item->status_bayar;
                        ?>


                        @if ($status=="Belum Dicek") 

                            <td>
                            <a class="btn btn-warning" href="{{ url('admin/detailbayar/'.$item->id)}}">Detail</a>
                            <a class="btn btn-success" href="{{ url('admin/edit-bayar/'.$item->id)}}">Validasi</a>
                            </td>
                            
                        @else 
                            <td> 
                            <a class="btn btn-warning" href="{{ url('admin/detailbayar/'.$item->id)}}">Detail</a>
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
