@extends('layouts.master')

@section('title','Detail Data Pembeli RojoTani')

@section('content')

<div class="container-fluid px-5" style="max-width: 75%; ">

    <div class="card mt-4">
        <div class="card-header2">
            <h4>Detail Data Pembeli
            </h4>
        </div>


        <div class="card mb-3" style="max-width: 100%; margin: 25px;">
            <div class="row g-0">
                <div class="col-md-4" >
                    <img
                        src="{{ asset('public/public/gambar/userpembeli/'. $pembeli->gambar) }}"
                        alt="Img"
                        height="86%"
                        width="86%"
                        style="margin-top: 25px; margin-left: 25px; margin-bottom: 25px;"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body table-responsive">
                        <table class="table table-stripped">
                            <tr>
                                <th width="45%">Nama Pembeli</th>
                                <td>:</td>
                                <td>{{ $pembeli->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Pembeli</th>
                                <td>:</td>
                                <td>{{ $pembeli->alamat }}</td>
                            </tr>
                            <tr>
                                <th width="3%">Email</th>
                                <td width="2%">:</td>
                                <td>{{ $pembeli->email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div>
                    <a class="btn buttonkembali" href="{{ url('admin/selesaidetail') }}"> Kembali </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
