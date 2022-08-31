@extends('layouts.master')

@section('title','Data Pegawai RojoTani')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header1">
            <h4 class="">Tambah Data Pegawai </h4>

        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/add-userdata') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control1">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control1">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control1">
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text" name="kontak" class="form-control1">
                </div>

                <div class="mb-3">
                    <label>Role</label>
                    <!-- <input type="text" name="role" class="form-control1"> -->
                    <select id="role" class="form-control1" name="role" value="{{ old('role') }}" required>
                        <option selected></option>
                        <option>Admin</option>
                        <option>Pimpinan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control1" />
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" />
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
