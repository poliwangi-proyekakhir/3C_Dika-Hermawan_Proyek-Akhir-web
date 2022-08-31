@extends('layouts.master')

@section('title','Data Pemilik Komoditas RojoTani')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Pemilik Komoditas
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a class="btn buttonrefresh1" href="{{ url('admin/datapenjual') }}">Refresh Data</a>
            </div>

            @if (session('message'))
                <div class="alert alert-success">{{ (session('message')) }}</div>
            @endif

            <table id="tabelData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Rekening</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($user_penjuals as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_rekening }}</td>
                            <td>
                                <img src="{{ asset('public/public/img/userpenjual/'.$item->gambar) }}" width="50px" height="65px" alt="Img">
                            </td>
                            <td>
                                <a href="{{ url('admin/detailpenjual/'.$item->id)}}" class="btn btn-warning">Detail</a>
                                <a href="{{ url('admin/edit-datapenjual/'.$item->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{ url('admin/delete-datapenjual/'.$item->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
