@extends('layouts.master')

@section('title','Produk RojoTani')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Produk
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a class="btn buttonrefresh1" href="{{ url('admin/dataproduk') }}">Refresh Data</a>
            </div>

            @if (session('message'))
                <div class="alert alert-success">{{ (session('message')) }}</div>
            @endif

            <table id="tabelData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penjual</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Jenis</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($produks as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->penjual->nama}}</td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp. {{ $item->harga }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>
                                <img src="{{ asset('public/img/produk/'.$item->gambar) }}" width="60px" height="50px" alt="Img">    
                            </td>
                            <td>
                                <a href="{{ url('admin/detailproduk/'.$item->id)}}" class="btn btn-warning">Detail</a>
                                <a href="{{ url('admin/delete-produk/'.$item->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection
