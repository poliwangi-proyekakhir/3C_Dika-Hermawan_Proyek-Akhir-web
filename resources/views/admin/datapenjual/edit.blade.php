@extends('layouts.master')

@section('title','Data Penjual RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 90%;">

    <div class="card mt-4">
        <div class="card-header1">
            <h4 class="">Edit Data Penjual </h4>

        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-datapenjual/'.$userpenjual->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Nama Penjual</label>
                    <input type="text" name="nama" value="{{ $userpenjual->nama }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Email</label>
                    <input type="text" name="email" value="{{ $userpenjual->email }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Alamat</label>
                    <input type="text" name="alamat" value="{{ $userpenjual->alamat }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">No. Rekening</label>
                    <input type="text" name="no_rekening" value="{{ $userpenjual->no_rekening }}" class="form-control1">
                </div>

                <div class="mb-3">
                    <label style="margin-bottom:8px; font-weight:400;">Image</label>
                    <input type="file" name="gambar" class="form-control1">
                </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top:15px;">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
