@extends('layouts.master')

@section('title','Data Pegawai RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 90%;">



    <div class="card mt-4">
        <div class="card-header1">
            <h4 class="">Edit User Data </h4>

        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-userdata/'.$userdata->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ $userdata->nama }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Email</label>
                    <input type="text" name="email" value="{{ $userdata->email }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Alamat</label>
                    <input type="text" name="alamat" value="{{ $userdata->alamat }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Telepon</label>
                    <input type="text" name="kontak" value="{{ $userdata->kontak }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Role</label>
                    <input type="text" name="role" value="{{ $userdata->role }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Image</label>
                    <input type="file" name="image" class="form-control1">
                </div>

                <h6>RojoTani Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label style="margin-bottom:8px; font-weight:400;">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" {{ $userdata->navbar_status == '1' ? 'checked':''}} />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label style="margin-bottom:8px; font-weight:400;">Status</label>
                        <input type="checkbox" name="status" {{ $userdata->status == '1' ? 'checked':''}} />
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top: 40px;" >Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
