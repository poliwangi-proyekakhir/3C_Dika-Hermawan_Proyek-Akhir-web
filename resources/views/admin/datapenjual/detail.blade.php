@extends('layouts.master')

@section('title','Detail Data Penjual RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 75%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Penjual
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/public/img/userpenjual/'. $penjual->gambar) }}"
                        alt="Img"
                        height="86%"
                        width="80%"
                        style="margin-top: 10px; margin-left: 25px; margin-bottom:35px;"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body table-responsive">
                        <table class="table table-stripped">
                            <tr>
                                <th width="45%">Nama Penjual</th>
                                <td>:</td>
                                <td>{{ $penjual->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Penjual</th>
                                <td>:</td>
                                <td>{{ $penjual->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Email</th>
                                <td width="2%">:</td>
                                <td>{{ $penjual->email }}</td>
                            </tr>
                            <tr>
                                <th>No Rekening</th>
                                <td>:</td>
                                <td>{{ $penjual->no_rekening }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/keluardetail') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
