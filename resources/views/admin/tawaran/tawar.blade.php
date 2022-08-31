@extends('layouts.master')

@section('title','Data Tawaran RojoTani')

@section('content')

<div class="container-fluid px-3">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Tawaran
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a class="btn buttonrefresh1" href="{{ url('admin/tawaran') }}">Refresh Data</a>
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
                        <th>Harga Tawar</th>
                        <th>Gambar</th>
                        <th>Status Tawar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($tawar as $item)
                    <tr>
                        <td> {{ ++$no }}</td>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->pembeli->nama }} </td>
                        <td> {{ $item->pembeli->alamat }} </td>
                        <td> {{ $item->lelang->nama }} </td>
                        <td> {{ $item->lelang->jumlah }} </td>
                        <td> Rp. {{ $item->harga_tawar }} </td>
                        <td>
                            <img src="{{ asset('public/imglelang/lelang/'.$item->lelang->gambar) }}" width="60px" height="50px" alt="Img">    
                        </td>
                        <td> {{ $item->status_tawar }} </td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('admin/detailtawar/'.$item->id)}}">Detail</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
