@extends('layouts.master')

@section('title','Data Pesanan RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 80%; margin-top:50px;">

    <div class="card mt-4">
        <div class="card-header1">
            <h4 class="">Edit Pesanan </h4>

        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-pesanan/'.$cekout->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label style="margin-bottom:10px; font-weight:500;">Status Pesanan</label>
                    <select id="status_pesanan" class="form-control1" name="status_pesanan" value="{{ old('status_pesanan') }}" required>
                        <option selected></option>
                        <option>dikemas</option>


                    </select>
                </div>


                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" style="margin-top:15px;">Update Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
