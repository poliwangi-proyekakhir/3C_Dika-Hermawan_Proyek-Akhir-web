@extends('layouts.master')

@section('title','Data Pesanan RojoTani')

@section('content')

<div class="container-fluid px-3">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Pesanan
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a class="btn buttonrefresh1" href="{{ url('admin/datapesanan') }}">Refresh Data</a>
                <a href="{{ url('admin/cetakpesanan')}}" class="btn btn-danger" target="_blank">Cetak</a>
            </div>

            @if (session('message'))
                <div class="alert alert-success">{{ (session('message')) }}</div>
            @endif

            <table id="tabelData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Pembeli</th>
                        <th>Alamat</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                        <th>Total</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($cekout as $item)
                    <tr>
                        <td> {{ ++$no }}</td>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->nama_pembeli }} </td>
                        <td> {{ $item->alamat }} </td>
                        <td> {{ $item->produk->nama }} </td>
                        <td> {{ $item->jumlah }} </td>
                        <td> Rp. {{ $item->harga }} </td>
                        <td> {{ $item->subtotal }} </td>
                        <td> {{ $item->total_bayar }} </td>
                        <td>
                            <img src="{{ asset('public/img/produk/'.$item->gambar) }}" width="60px" height="50px" alt="Img">    
                        </td>
                        <td> {{ $item->status_pesanan }} </td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('admin/detail/'.$item->id)}}">Detail</a>
                            <a class="btn btn-success" href="{{ url('admin/edit-pesanan/'.$item->id)}}">Status</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
