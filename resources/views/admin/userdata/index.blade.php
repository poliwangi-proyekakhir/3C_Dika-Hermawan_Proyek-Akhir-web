@extends('layouts.master')

@section('title','Data Pegawai RojoTani')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Data Pegawai
            </h4>
        </div>
        <div class="card-body">
            <div>
                <a href="{{ url('admin/add-userdata') }}" class="btn buttontambah"><i class="fas fa-plus"></i>  Tambah Data Pegawai</a>
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
                        <th>Telepon</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($userdata as $item)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kontak }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <img src="{{ asset('public/uploads/userdata/'.$item->image) }}" width="50px" height="50px" alt="Img">
                        </td>
                        <td>{{ $item->status == '1' ? 'Hidden':'Shown' }}</td>
                        <td>
                            <a href="{{ url('admin/edit-userdata/'.$item->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{ url('admin/delete-userdata/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
